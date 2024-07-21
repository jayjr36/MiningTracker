<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiningTrackingController;


// routes/web.php

use App\Http\Controllers\MiningDataController;

Route::post('/mining-tracking', [MiningDataController::class, 'store']);

