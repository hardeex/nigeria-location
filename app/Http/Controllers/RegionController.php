<?php

namespace App\Http\Controllers;

use App\Http\Resources\LgaResource;
use App\Http\Resources\StateResource;
use App\Models\Lga;
use App\Models\State;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    // -----------------------------------------------------------------------
    // STATES
    // -----------------------------------------------------------------------

    /**
     * GET /v1/states
     * List all 36 states + FCT, optionally filtered by geo_zone.
     */
    public function states(Request $request): JsonResponse
    {
        $query = State::orderBy('name');

        if ($request->filled('geo_zone')) {
            $query->where('geo_zone', strtoupper($request->geo_zone))
                ->orWhere('geo_zone_full', 'LIKE', '%' . $request->geo_zone . '%');
        }

        $states = Cache::remember('states:all:' . md5($request->fullUrl()), 3600, fn() => $query->get());

        return $this->success(
            StateResource::collection($states),
            ['total' => $states->count()]
        );
    }

    /**
     * GET /v1/states/{slug}
     * Single state detail by slug or name.
     */
    public function stateDetail(string $identifier): JsonResponse
    {
        $state = $this->resolveState($identifier);

        if (!$state) {
            return $this->notFound('State not found');
        }

        return $this->success(new StateResource($state));
    }

    // -----------------------------------------------------------------------
    // LGAS
    // -----------------------------------------------------------------------

    /**
     * GET /v1/lgas
     * All LGAs — supports ?state= filter.
     */
    public function lgas(Request $request): JsonResponse
    {
        $query = Lga::orderBy('state_name')->orderBy('name');

        if ($request->filled('state')) {
            $state = $this->resolveState($request->state);
            if (!$state) {
                return $this->notFound('State not found');
            }
            $query->where('state_name', $state->name);
        }

        $lgas = $query->get();

        return $this->success(
            LgaResource::collection($lgas),
            ['total' => $lgas->count()]
        );
    }

    /**
     * GET /v1/states/{slug}/lgas
     * All LGAs for a given state.
     */
    public function lgasByState(string $identifier): JsonResponse
    {
        $state = $this->resolveState($identifier);

        if (!$state) {
            return $this->notFound('State not found');
        }

        $lgas = Lga::where('state_name', $state->name)
            ->orderBy('name')
            ->get();

        return $this->success(
            LgaResource::collection($lgas),
            [
                'state' => new StateResource($state),
                'total' => $lgas->count(),
            ]
        );
    }

    /**
     * GET /v1/lgas/search?q=lagos&state=Lagos
     * Fuzzy search LGAs by name, optional state filter.
     */
    public function searchLgas(Request $request): JsonResponse
    {
        $request->validate([
            'q' => 'required|string|min:2|max:100',
        ]);

        $query = Lga::where('name', 'LIKE', '%' . $request->q . '%')
            ->orderBy('name');

        if ($request->filled('state')) {
            $state = $this->resolveState($request->state);
            if ($state) {
                $query->where('state_name', $state->name);
            }
        }

        $lgas = $query->limit(50)->get();

        return $this->success(
            LgaResource::collection($lgas),
            ['total' => $lgas->count(), 'query' => $request->q]
        );
    }

    // -----------------------------------------------------------------------
    // GEO ZONES
    // -----------------------------------------------------------------------

    /**
     * GET /v1/geo-zones
     * The 6 geopolitical zones of Nigeria with their states.
     */
    public function geoZones(): JsonResponse
    {
        $zones = Cache::remember('geo_zones', 3600, function () {
            return State::orderBy('geo_zone_full')->orderBy('name')
                ->get()
                ->groupBy('geo_zone_full')
                ->map(function ($states, $zone) {
                    return [
                        'zone' => $states->first()->geo_zone,
                        'zone_full' => $zone,
                        'state_count' => $states->count(),
                        'states' => StateResource::collection($states),
                    ];
                })
                ->values();
        });

        return $this->success($zones, ['total_zones' => $zones->count()]);
    }

    /**
     * GET /v1/geo-zones/{zone}/states
     * All states in a given geopolitical zone. Accepts short (NW) or full (North West).
     */
    public function statesByGeoZone(string $zone): JsonResponse
    {
        $states = State::where('geo_zone', strtoupper($zone))
            ->orWhere('geo_zone_full', 'LIKE', '%' . $zone . '%')
            ->orderBy('name')
            ->get();

        if ($states->isEmpty()) {
            return $this->notFound('Geo zone not found. Valid zones: NC, NE, NW, SE, SS, SW');
        }

        return $this->success(
            StateResource::collection($states),
            [
                'zone' => $states->first()->geo_zone,
                'zone_full' => $states->first()->geo_zone_full,
                'total' => $states->count(),
            ]
        );
    }

    // -----------------------------------------------------------------------
    // POSTAL CODE
    // -----------------------------------------------------------------------

    /**
     * GET /v1/postal-codes/lookup?code=100269
     * Reverse lookup: postal code → state + LGA.
     */
    public function postalLookup(Request $request): JsonResponse
    {
        $request->validate([
            'code' => 'required|string|min:3|max:10',
        ]);

        $code = trim($request->code);

        // Try exact LGA match first
        $lga = Lga::where('postal_code', $code)->with('state')->first();

        if ($lga) {
            return $this->success([
                'postal_code' => $code,
                'lga' => new LgaResource($lga),
                'state' => new StateResource($lga->state),
            ]);
        }

        // Try prefix match against state postal_prefix (first 3 digits)
        $prefix = substr($code, 0, 3);
        $state = State::where('postal_prefix', $prefix)->first();

        if ($state) {
            return $this->success([
                'postal_code' => $code,
                'lga' => null,
                'state' => new StateResource($state),
                'note' => 'Matched state-level prefix only; specific LGA not found for this code',
            ]);
        }

        return $this->notFound('No location found for postal code: ' . $code);
    }

    // -----------------------------------------------------------------------
    // NEARBY  (Haversine)
    // -----------------------------------------------------------------------

    /**
     * GET /v1/nearby?lat=6.45&lng=3.39&radius=50&type=lga
     * Find nearby LGAs or states within a given radius (km).
     *
     * Query params:
     *   lat     (required) float
     *   lng     (required) float
     *   radius  (optional) km, default 100, max 500
     *   limit   (optional) default 10, max 50
     *   type    (optional) lga|state, default lga
     */
    public function nearby(Request $request): JsonResponse
    {
        $request->validate([
            'lat' => 'required|numeric|between:-90,90',
            'lng' => 'required|numeric|between:-180,180',
            'radius' => 'nullable|numeric|min:1|max:500',
            'limit' => 'nullable|integer|min:1|max:50',
            'type' => 'nullable|in:lga,state',
        ]);

        $lat = (float) $request->lat;
        $lng = (float) $request->lng;
        $radius = (float) ($request->radius ?? 100);
        $limit = (int) ($request->limit ?? 10);
        $type = $request->type ?? 'lga';

        // Haversine formula via raw SQL — works on MySQL & SQLite
        $haversine = "(6371 * ACOS(
            COS(RADIANS(?)) * COS(RADIANS(lat)) *
            COS(RADIANS(lng) - RADIANS(?)) +
            SIN(RADIANS(?)) * SIN(RADIANS(lat))
        ))";

        if ($type === 'state') {
            $results = State::whereNotNull('lat')
                ->selectRaw("*, {$haversine} AS distance_km", [$lat, $lng, $lat])
                ->having('distance_km', '<=', $radius)
                ->orderBy('distance_km')
                ->limit($limit)
                ->get();

            return $this->success(
                StateResource::collection($results),
                [
                    'center' => ['lat' => $lat, 'lng' => $lng],
                    'radius_km' => $radius,
                    'total' => $results->count(),
                ]
            );
        }

        $results = Lga::whereNotNull('lat')
            ->selectRaw("*, {$haversine} AS distance_km", [$lat, $lng, $lat])
            ->having('distance_km', '<=', $radius)
            ->orderBy('distance_km')
            ->limit($limit)
            ->get();

        return $this->success(
            LgaResource::collection($results),
            [
                'center' => ['lat' => $lat, 'lng' => $lng],
                'radius_km' => $radius,
                'total' => $results->count(),
            ]
        );
    }

    // -----------------------------------------------------------------------
    // HELPERS
    // -----------------------------------------------------------------------

    /**
     * Resolve a state by slug, name, or ISO code (case-insensitive).
     */
    private function resolveState(string $identifier): ?State
    {
        return State::where('slug', strtolower($identifier))
            ->orWhere('name', $identifier)
            ->orWhere('iso_code', strtoupper($identifier))
            ->first();
    }

    private function success(mixed $data, array $meta = []): JsonResponse
    {
        $payload = ['status' => 'success', 'data' => $data];

        if (!empty($meta)) {
            $payload['meta'] = $meta;
        }

        return response()->json($payload);
    }

    private function notFound(string $message): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
        ], 404);
    }
}
