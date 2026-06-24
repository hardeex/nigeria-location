<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'slug'         => $this->slug,
            'capital'      => $this->capital,
            'geo_zone'     => $this->geo_zone,
            'geo_zone_full'=> $this->geo_zone_full,
            'iso_code'     => $this->iso_code,
            'country_code' => $this->country_code,
            'coordinates'  => [
                'lat' => $this->lat,
                'lng' => $this->lng,
            ],
            'postal_prefix' => $this->postal_prefix,
            'lga_count'     => $this->lga_count,
        ];
    }
}
