<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MapController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::get('/map/buildings', [MapController::class, 'getBuildings'])->name('api.map.buildings');
});

Route::middleware([Localization::class])->group(function () {
    Route::get('/change-language/{lang}', [LanguageController::class, 'change'])->name('lang.change');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::view('/contact', 'contact')->name('contact');
    Route::get('/buildings/{id}', [HomeController::class, 'show'])->name('buildings.show');
    Route::get('/map', [MapController::class, 'showMap'])->name('map');
    Route::get('/get-address', [MapController::class, 'getAddress']);
});
