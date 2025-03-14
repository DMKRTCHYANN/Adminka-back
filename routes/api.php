<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ChatController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{id}', [CarController::class, 'show']);
Route::post('/cars', [CarController::class, 'store']);
Route::put('/cars/{id}', [CarController::class, 'update']);
Route::delete('/cars/{id}',[CarController::class, 'destroy']);

Route::get('/clients',[ClientController::class, 'index']);
Route::get('/clients/{id}', [ClientController::class, 'show']);
Route::post('/clients',[ClientController::class, 'store']);
Route::put('/clients/{id}',[ClientController::class, 'update']);
Route::delete('/clients/{id}',[ClientController::class,'destroy']);

Route::get('/sales',[SaleController::class, 'index']);
Route::get('/sales/{id}', [SaleController::class, 'show']);
Route::post('/sales',[SaleController::class, 'store']);
Route::put('/sales/{id}',[SaleController::class, 'update']);
Route::delete('/sales/{id}',[SaleController::class, 'destroy']);


Route::post('/ask', [ChatController::class, 'askQuestion']);
