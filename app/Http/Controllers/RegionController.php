<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\State;
use Illuminate\Http\Request;

class RegionController extends Controller
{



    public function states()
    {
        $states = State::all();

        return response()->json($states);
    }

    public function lgas()
    {
        $lgas = Lga::all();

        return response()->json($lgas);
    }
    public function lgasByState($state_name)
    {
        // Find the state by its name
        $state = State::where('name', $state_name)->first();

        // If the state is not found, return an error response
        if (!$state) {
            return response()->json(['error' => 'State not found'], 404);
        }

        // Fetch all LGAs that belong to the found state (based on state_name)
        // Order the LGAs alphabetically by name
        $lgas = Lga::where('state_name', $state_name)
            ->orderBy('name', 'asc') // Order by name in ascending (alphabetical) order
            ->get();

        return response()->json($lgas);
    }
}
