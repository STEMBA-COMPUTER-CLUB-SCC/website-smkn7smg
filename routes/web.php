<?php

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
