<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomentarController;

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

Route::get('/', [KategoriController::class, 'home'])->name('home');

Route::get('/kategori/olahraga', [KategoriController::class, 'olahraga'])->name('kategori.olahraga');
Route::get('/kategori/bisnis', [KategoriController::class, 'bisnis'])->name('kategori.bisnis');
Route::get('/kategori/politik', [KategoriController::class, 'politik'])->name('kategori.politik');
Route::get('/kategori/kesehatan', [KategoriController::class, 'kesehatan'])->name('kategori.kesehatan');
Route::get('/kategori/hiburan', [KategoriController::class, 'hiburan'])->name('kategori.hiburan');
Route::get('/kategori/teknologi', [KategoriController::class, 'teknologi'])->name('kategori.teknologi');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/berita/{index}', [KategoriController::class, 'showBerita'])->name('beritadetail');

Route::get('/berita-local/{id}', [KategoriController::class, 'showLocalDetail'])->name('beritadetail_local');
