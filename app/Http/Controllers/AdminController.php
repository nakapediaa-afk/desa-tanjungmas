<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Umkm;
use App\Models\Kependudukan;
use App\Models\PerangkatDesa;
use Illuminate\Support\Str;

class AdminController extends Controller {
    public function loginView() {
        return view('admin.login');
    }

    public function loginSubmit(Request $request) {
        if ($request->password === 'admin123' || $request->password === '123456') {
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard')->with('success', 'Berhasil masuk sebagai Admin Desa');
        }
        return back()->with('error', 'PIN / Password Admin salah!');
    }

    public function logout() {
        session()->forget('is_admin');
        return redirect()->route('home')->with('success', 'Berhasil keluar dari Admin');
    }

    public function dashboard() {
        if (!session('is_admin')) return redirect()->route('admin.login');

        $berita = Berita::latest()->get();
        $umkm = Umkm::latest()->get();
        $stats = Kependudukan::first();
        $perangkat = PerangkatDesa::all();

        return view('admin.dashboard', compact('berita', 'umkm', 'stats', 'perangkat'));
    }

    public function updateStats(Request $request) {
        if (!session('is_admin')) return redirect()->route('admin.login');

        $stats = Kependudukan::first();
        if ($stats) {
            $stats->update([
                'total_penduduk' => $request->total_penduduk,
                'kepala_keluarga' => $request->kepala_keluarga,
                'laki_laki' => $request->laki_laki,
                'perempuan' => $request->perempuan,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'dusun' => $request->dusun,
                'luas_wilayah' => $request->luas_wilayah,
            ]);
        }

        return back()->with('success', 'Data statistik kependudukan berhasil diperbarui!');
    }

    public function storeBerita(Request $request) {
        if (!session('is_admin')) return redirect()->route('admin.login');

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul) . '-' . rand(100, 999),
            'kategori' => $request->kategori,
            'penulis' => $request->penulis ?? 'Sekdes M. Anggi Rambe',
            'ringkasan' => $request->ringkasan,
            'isi' => $request->isi,
            'gambar' => $request->gambar ?? 'https://images.unsplash.com/photo-1584467735871-8e85353a8413?w=800'
        ]);

        return back()->with('success', 'Berita berhasil diterbitkan!');
    }

    public function destroyBerita($id) {
        if (!session('is_admin')) return redirect()->route('admin.login');
        Berita::destroy($id);
        return back()->with('success', 'Berita berhasil dihapus');
    }

    public function storeUmkm(Request $request) {
        if (!session('is_admin')) return redirect()->route('admin.login');

        Umkm::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'penjual' => $request->penjual,
            'telepon' => $request->telepon,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar ?? 'https://images.unsplash.com/photo-1566478989037-eec170784d0b?w=600'
        ]);

        return back()->with('success', 'Produk UMKM berhasil ditambahkan!');
    }

    public function destroyUmkm($id) {
        if (!session('is_admin')) return redirect()->route('admin.login');
        Umkm::destroy($id);
        return back()->with('success', 'Produk UMKM dihapus');
    }
}
