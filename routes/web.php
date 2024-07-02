<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layanan-harga', function () {
    return view('layanan');
});

Route::get('/layanan-harga', [MenuController::class, 'index']);