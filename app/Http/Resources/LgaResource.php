<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LgaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'slug'         => $this->slug,
            'state'        => $this->state_name,
            'state_slug'   => $this->state_slug,
            'country_code' => $this->country_code,
            'coordinates'  => [
                'lat' => $this->lat,
                'lng' => $this->lng,
            ],
            'postal_code'  => $this->postal_code,

            // included when loaded via nearby or state detail
            'distance_km'  => $this->when(isset($this->distance_km), fn() => round($this->distance_km, 2)),
            'state_detail' => $this->whenLoaded('state', fn() => new StateResource($this->state)),
        ];
    }
}
