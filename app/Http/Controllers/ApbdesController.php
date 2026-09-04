<?php

namespace App\Http\Controllers;

use App\Models\Apbdes;

class ApbdesController extends Controller {
    public function index() {
        $pendapatan = Apbdes::where('jenis', 'pendapatan')->get();
        $belanja = Apbdes::where('jenis', 'belanja')->get();
        $totalPendapatan = $pendapatan->sum('jumlah');
        $totalBelanja = $belanja->sum('jumlah');

        return view('apbdes.index', compact('pendapatan', 'belanja', 'totalPendapatan', 'totalBelanja'));
    }
}
