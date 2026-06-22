<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;

class Lga extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'state_name'];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_name', 'name');
    }
}
