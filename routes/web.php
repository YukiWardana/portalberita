<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return view('register');
})->name('register');

