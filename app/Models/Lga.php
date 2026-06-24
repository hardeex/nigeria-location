<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lga extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'state_name',
        'state_slug',
        'lat',
        'lng',
        'postal_code',
        'country_code',
    ];

    protected $casts = [
        'lat' => 'float',
        'lng' => 'float',
    ];

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_name', 'name');
    }
}
