<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller {
    public function index(Request $request) {
        $query = Berita::latest();
        
        if ($request->has('kategori') && $request->kategori != 'Semua') {
            $query->where('kategori', $request->kategori);
        }

        if ($request->has('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $berita = $query->paginate(6);
        return view('berita.index', compact('berita'));
    }

    public function show($slug) {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $terkait = Berita::where('id', '!=', $berita->id)->latest()->take(3)->get();
        return view('berita.show', compact('berita', 'terkait'));
    }
}
