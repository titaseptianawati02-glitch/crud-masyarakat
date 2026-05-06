<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;


Route::get('/', function () {
    return "Halaman utama";
});


Route::resource('masyarakat', MasyarakatController::class);