<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/landing/landing');
});

Route::get('/jurusan/pplg', function () {
    return view('/landing/landing');
});

Route::get('/berita', function () {
    return view('/berita/berita');
});

Route::get('/berita/detail', function () {
    return view('/berita/detail');
});

Route::get('/kontak', function () {
    return view('/kontak/kontak');
});