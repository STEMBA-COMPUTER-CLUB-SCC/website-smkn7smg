<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.pages.beranda');
})->name('beranda');

Route::get('/tentang', function () {
    return view('components.pages.tentang'); 
})->name('tentang');