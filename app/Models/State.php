<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'capital',
        'geo_zone',
        'geo_zone_full',
        'lat',
        'lng',
        'postal_prefix',
        'country_code',
        'iso_code',
        'lga_count',
    ];

    protected $casts = [
        'lat' => 'float',
        'lng' => 'float',
        'lga_count' => 'integer',
    ];

    public function lgas(): HasMany
    {
        return $this->hasMany(Lga::class, 'state_name', 'name');
    }
}
