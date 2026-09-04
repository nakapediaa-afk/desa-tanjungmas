<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller {
    public function index(Request $request) {
        $query = Umkm::latest();

        if ($request->has('kategori') && $request->kategori != 'Semua') {
            $query->where('kategori', $request->kategori);
        }

        $umkm = $query->get();
        return view('umkm.index', compact('umkm'));
    }
}
