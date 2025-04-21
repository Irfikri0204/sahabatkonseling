<?php

use App\Http\Controllers\KonselorController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.main');
});

Route::resource('about/konselor', KonselorController::class);

Route::resource('post', PostController::class);
