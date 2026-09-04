<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Umkm;
use App\Models\Kependudukan;
use App\Models\PerangkatDesa;

class HomeController extends Controller {
    public function index() {
        $stats = Kependudukan::first();
        $berita = Berita::latest()->take(3)->get();
        $umkm = Umkm::latest()->take(4)->get();
        $perangkat = PerangkatDesa::all();

        return view('home', compact('stats', 'berita', 'umkm', 'perangkat'));
    }
}
