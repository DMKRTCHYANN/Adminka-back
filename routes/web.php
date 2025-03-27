<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/', [HomeController::class, 'index']);
Route::get('/buildings/{id}', [HomeController::class, 'show']);
