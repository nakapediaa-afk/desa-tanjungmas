<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Umkm;
use App\Models\Kependudukan;
use App\Models\PerangkatDesa;
use App\Models\Landmark;
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
        $landmarks = Landmark::orderBy('urutan')->get();

        return view('admin.dashboard', compact('berita', 'umkm', 'stats', 'perangkat', 'landmarks'));
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

    public function storeLandmark(Request $request) {
        if (!session('is_admin')) return redirect()->route('admin.login');

        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $foto = $request->foto_url ?? 'https://images.unsplash.com/photo-1524661135-423995f22d0b?w=800';

        if ($request->hasFile('foto_file')) {
            $file = $request->file('foto_file');
            $uploadDir = public_path('uploads/landmarks');
            if (!is_dir($uploadDir)) {
                @mkdir($uploadDir, 0755, true);
            }
            $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $foto = '/uploads/landmarks/' . $filename;
        }

        // Auto color & pin styling based on category
        $badgeMap = [
            'pemerintahan' => ['badge' => 'Pusat Pemerintahan', 'bg' => '#ffe4e6', 'color' => '#e11d48', 'pin' => 'pin-kantor', 'icon' => '🏛️'],
            'sarana' => ['badge' => 'Ibadah / Pendidikan', 'bg' => '#ccfbf1', 'color' => '#0f766e', 'pin' => 'pin-masjid', 'icon' => '🕌'],
            'olahraga' => ['badge' => 'Sarana Olahraga', 'bg' => '#d1fae5', 'color' => '#059669', 'pin' => 'pin-stadion', 'icon' => '⚽'],
            'kkn' => ['badge' => 'Posko Mahasiswa', 'bg' => '#f3e8ff', 'color' => '#7c3aed', 'pin' => 'pin-posko', 'icon' => '🎓'],
            'umkm' => ['badge' => 'UMKM & Kuliner', 'bg' => '#fef3c7', 'color' => '#d97706', 'pin' => 'pin-umkm', 'icon' => '🛍️'],
            'alam' => ['badge' => 'Infrastruktur Alam', 'bg' => '#cffafe', 'color' => '#0891b2', 'pin' => 'pin-jembatan', 'icon' => '🌉'],
        ];

        $b = $badgeMap[$request->kategori] ?? ['badge' => 'Titik Lokasi', 'bg' => '#dcfce7', 'color' => '#15803d', 'pin' => 'pin-dusun', 'icon' => '📍'];

        Landmark::create([
            'slug' => Str::slug($request->nama) . '-' . rand(100, 999),
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'latitude' => trim($request->latitude),
            'longitude' => trim($request->longitude),
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
            'icon' => $b['icon'],
            'pin_class' => $b['pin'],
            'badge' => $b['badge'],
            'badge_bg' => $b['bg'],
            'badge_color' => $b['color'],
            'urutan' => Landmark::count() + 1
        ]);

        return back()->with('success', 'Titik lokasi dan foto tempat berhasil ditambahkan ke peta!');
    }

    public function updateLandmark(Request $request, $id) {
        if (!session('is_admin')) return redirect()->route('admin.login');

        $landmark = Landmark::findOrFail($id);

        $foto = $landmark->foto;
        if ($request->hasFile('foto_file')) {
            $file = $request->file('foto_file');
            $uploadDir = public_path('uploads/landmarks');
            if (!is_dir($uploadDir)) {
                @mkdir($uploadDir, 0755, true);
            }
            $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $foto = '/uploads/landmarks/' . $filename;
        } elseif ($request->filled('foto_url')) {
            $foto = $request->foto_url;
        }

        $landmark->update([
            'nama' => $request->nama ?? $landmark->nama,
            'kategori' => $request->kategori ?? $landmark->kategori,
            'latitude' => $request->latitude ? trim($request->latitude) : $landmark->latitude,
            'longitude' => $request->longitude ? trim($request->longitude) : $landmark->longitude,
            'deskripsi' => $request->deskripsi ?? $landmark->deskripsi,
            'foto' => $foto
        ]);

        return back()->with('success', 'Data lokasi dan foto tempat berhasil diperbarui!');
    }

    public function destroyLandmark($id) {
        if (!session('is_admin')) return redirect()->route('admin.login');
        Landmark::destroy($id);
        return back()->with('success', 'Titik lokasi berhasil dihapus dari peta');
    }
}
