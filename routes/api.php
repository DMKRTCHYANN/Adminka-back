<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Api\Auth\PasswordResetController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/buildings', [BuildingController::class, 'index']);
Route::get('/buildings/{id}', [BuildingController::class, 'show']);
Route::post('/buildings', [BuildingController::class, 'store']);
Route::put('/buildings/{id}', [BuildingController::class, 'update']);
Route::delete('/buildings/{id}',[BuildingController::class, 'destroy']);
Route::post('buildings/{id}/move-after/{positionEntityId}', [BuildingController::class, 'moveAfter']);
Route::post('buildings/{id}/move-down', [BuildingController::class, 'moveDown']);
Route::post('buildings/reorder', [BuildingController::class, 'reorder']);

Route::get('/images', [ImageController::class, 'index']);
Route::post('/images/{id}', [ImageController::class, 'store']);
Route::get('/buildings/{id}/images', [ImageController::class, 'getBuildingImages']);
Route::delete('/images/{id}',[ImageController::class, 'destroy']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('password/request-reset', [PasswordResetController::class, 'requestPasswordReset']);
Route::post('password/reset', [PasswordResetController::class, 'resetPassword']);
Route::post('password/verify-code', [PasswordResetController::class, 'verifyCode']);
