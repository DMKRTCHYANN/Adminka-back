<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/', [HomeController::class, 'index']);
Route::get('/buildings/{id}', [HomeController::class, 'show']);
Route::get('/map', [MapController::class, 'showMap']);
Route::get('/api/map/buildings', [MapController::class, 'getBuildings']); // Маршрут исправлен

