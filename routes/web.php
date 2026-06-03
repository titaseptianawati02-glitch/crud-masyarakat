<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\KeluhanController;

Route::get('/', function () {
    return "Halaman utama";
});

Route::resource('masyarakat', MasyarakatController::class);

Route::get('/keluhan/{keluhan}', [KeluhanController::class, 'show']);