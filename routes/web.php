<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pagejurusan;

Route::get('/', function () {
  return view('/landing/landing');
});

Route::get('/jurusan/{key}', Pagejurusan::class)->name('jurusan.jurusan');

Route::get('/kontak', function () {
  return view('/kontak/kontak');
});

Route::get('/berita', function () {
  return view('berita.berita');
});

Route::get('/berita/detail/{id}', function ($id) {
  return view('berita.detail', compact('id'));
});

Route::get('/prestasi', function () {
  return view('prestasi.prestasi');
});

Route::get('/prestasi/detail/{id}', function ($id) {
  return view('prestasi.detail', compact('id'));
});

Route::get('/php', function () {
  phpinfo();
});