<?php
//
//use App\Http\Controllers\HomeController;
//use App\Http\Controllers\LanguageController;
//use App\Http\Middleware\Localization;
//use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\App;
//use Illuminate\Support\Facades\Session;
//use App\Http\Controllers\MapController;
//
//Route::get('/contact', function () {
//    return view('contact');
//})->name('contact');
//
//Route::get('/', [HomeController::class, 'index']);
//Route::get('/buildings/{id}', [HomeController::class, 'show']);
//Route::get('/map', [MapController::class, 'showMap'])->name('map');
//Route::get('/api/map/buildings', [MapController::class, 'getBuildings']);
////Route::get('/change-language/{lang}', [LanguageController::class, 'change'])->name('lang.change');
//Route::middleware([Localization::class])->group(function () {
//    Route::get('/change-language/{lang}', [LanguageController::class, 'change'])->name('lang.change');
//
//    // Другие маршруты, если нужно
//    Route::get('/', function () {
//        return view('welcome');
//    })->name('home');
//});
//
//
////Route::get('/lang/{locale}', function ($locale) {
////    if (in_array($locale, ['en', 'ru'])) {
////        Session::put('locale', $locale);
////        App::setLocale($locale);
////    }
////    return redirect()->back();
////});
///
///
///

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MapController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

// Страница контактов
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Маршруты для главной страницы и связанных страниц
Route::get('/buildings/{id}', [HomeController::class, 'show']);
Route::get('/map', [MapController::class, 'showMap'])->name('map');
Route::get('/api/map/buildings', [MapController::class, 'getBuildings']);

// Группа маршрутов с Middleware для локализации
Route::middleware([Localization::class])->group(function () {
    // Смена языка
    Route::get('/change-language/{lang}', [LanguageController::class, 'change'])->name('lang.change');

    // Главная страница
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
