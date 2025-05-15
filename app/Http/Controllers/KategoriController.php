<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function home() {
        return view('home');
    }

    public function olahraga() {
        return view('kategori.olahraga');
    }

    public function esports() {
        return view('kategori.esports');
    }

    public function politik() {
        return view('kategori.politik');
    }

    public function otomotif() {
        return view('kategori.otomotif');
    }

    public function hiburan() {
        return view('kategori.hiburan');
    }

    public function teknologi() {
        return view('kategori.teknologi');
    }
}
