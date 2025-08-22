<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\DemoLogMiddleware;

// Routing cơ bản
Route::get('/', [HomeController::class, 'index']);
Route::get('/form', [HomeController::class, 'showForm']);
Route::post('/submit', [HomeController::class, 'submitForm']);
// Route::post('/submit', [HomeController::class, 'submitForm'])->middleware('demoLog'); // Thêm middleware custom
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'vi'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});


