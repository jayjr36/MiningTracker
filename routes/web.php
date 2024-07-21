<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiningTrackingController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});


use App\Http\Controllers\MiningDataController;

Route::get('/mining-tracking', [MiningDataController::class, 'index'])->name('mining-tracking');
//Route::get('/mining-tracking', [MiningTrackingController::class, 'index'])->name('mining-tracking');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
