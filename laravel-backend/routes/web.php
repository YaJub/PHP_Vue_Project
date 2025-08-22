<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Config;

// Route có middleware localization áp cho toàn bộ group
Route::middleware(['locale'])->group(function () {
    // Trang chủ
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Form
    Route::get('/form', [HomeController::class, 'showForm']);
    Route::post('/submit', [HomeController::class, 'submitForm']);
});

// Set locale
Route::get('/setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
        session(['locale' => (string) $locale]);
    }
    return redirect()->back();
})->name('setLocale');
