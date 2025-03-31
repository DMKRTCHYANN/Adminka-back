<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ForgotPasswordController;

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


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
