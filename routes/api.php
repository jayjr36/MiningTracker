<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiningTrackingController;


// routes/web.php

use App\Http\Controllers\MiningDataController;
use App\Models\Emergency;

Route::post('/mining/tracking/data', [MiningDataController::class, 'store']);


Route::post('/emergency', [MiningDataController::class, 'updateEmergencyButton']);