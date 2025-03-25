<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/landing/landing');
});

Route::get('/berita/detail', function () {
    return view('/berita/detail');
});
