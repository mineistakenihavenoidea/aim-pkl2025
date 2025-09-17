<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function profile() {
        return view('profile');
    }

    public function layanan() {
        return view('layanan');
    }

    public function produk() {
        return view('produk');
    }

    public function berita() {
        return view('berita');
    }

    public function interaksi() {
        return view('interaksi');
    }
    
}
