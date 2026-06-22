<?php

use App\Http\Controllers\RegionController;

// states and lga routes
Route::get('/states', [RegionController::class, 'states'])->name('states');
Route::get('/lgas', [RegionController::class, 'lgas'])->name('lgas');
Route::get('/lgas/{state_name}', [RegionController::class, 'lgasByState'])->name('lgas.by.state');
