<?php

use App\Http\Controllers\KonselorController;
use App\Http\Controllers\PengajuanKonselingController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.main');
});

Route::get('/layanan', function(){
    return view('page.layanan.layanan');
});

Route::resource('about/konselor', KonselorController::class);

Route::resource('post', PostController::class);

Route::get('pengajuan-konseling/export-pdf/{id}', [PengajuanKonselingController::class, 'exportPdf'])->name('pengajuan-konseling.export-pdf');

