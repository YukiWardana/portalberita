<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/berita1', function () {
    return view('berita1');
})->name('berita1');

Route::get('/berita2', function () {
    return view('berita2');
})->name('berita2');

Route::get('/berita3', function () {
    return view('berita3');
})->name('berita3');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('home', [KategoriController::class, 'home'])->name('home');
Route::get('/kategori/olahraga', [KategoriController::class, 'olahraga'])->name('kategori.olahraga');
Route::get('/kategori/esports', [KategoriController::class, 'esports'])->name('kategori.esports');
Route::get('/kategori/politik', [KategoriController::class, 'politik'])->name('kategori.politik');
Route::get('/kategori/otomotif', [KategoriController::class, 'otomotif'])->name('kategori.otomotif');
Route::get('/kategori/hiburan', [KategoriController::class, 'hiburan'])->name('kategori.hiburan');
Route::get('/kategori/teknologi', [KategoriController::class, 'teknologi'])->name('kategori.teknologi');
