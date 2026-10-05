<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

// Bonus: route parameter
Route::get('/hello/{nama}', function ($nama) {
    return "Halo, {$nama}! Selamat datang di project Laravel ini.";
});
