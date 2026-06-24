<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Nigeria Locations API — v1
|--------------------------------------------------------------------------
|
| Base URL: /api/v1
|
| Endpoints:
|   GET  /states                        – All states (optional ?geo_zone=SW)
|   GET  /states/{slug}                 – Single state detail
|   GET  /states/{slug}/lgas            – All LGAs for a state
|   GET  /lgas                          – All LGAs (optional ?state=Lagos)
|   GET  /lgas/search?q=aba             – Fuzzy LGA search
|   GET  /geo-zones                     – All 6 geopolitical zones
|   GET  /geo-zones/{zone}/states       – States in a zone (NC/NE/NW/SE/SS/SW)
|   GET  /postal-codes/lookup?code=xxx  – Reverse postal code lookup
|   GET  /nearby?lat=x&lng=y&radius=50  – Haversine proximity search
|
*/

Route::prefix('v1')->group(function () {

    // States
    Route::get('/states', [RegionController::class, 'states']);
    Route::get('/states/{slug}/lgas', [RegionController::class, 'lgasByState']);
    Route::get('/states/{slug}', [RegionController::class, 'stateDetail']);

    // LGAs
    Route::get('/lgas/search', [RegionController::class, 'searchLgas']);
    Route::get('/lgas', [RegionController::class, 'lgas']);

    // Geo Zones
    Route::get('/geo-zones/{zone}/states', [RegionController::class, 'statesByGeoZone']);
    Route::get('/geo-zones', [RegionController::class, 'geoZones']);

    // Postal
    Route::get('/postal-codes/lookup', [RegionController::class, 'postalLookup']);

    // Proximity
    Route::get('/nearby', [RegionController::class, 'nearby']);
});
