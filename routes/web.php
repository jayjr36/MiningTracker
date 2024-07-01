<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiningTrackingController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mining-tracking', [MiningTrackingController::class, 'index'])->name('mining-tracking');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
