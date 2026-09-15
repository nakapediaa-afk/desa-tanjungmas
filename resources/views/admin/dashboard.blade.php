@extends('layouts.app')

@section('title', 'Dashboard Pengelola Desa')

@section('content')
<div class="page-header">
    <div class="container">
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem;">
            <div>
                <h1 class="page-title">Dashboard Pengelola Desa</h1>
                <p class="page-desc">Pusat kendali portal berita, data kependudukan, dan etalase UMKM Desa Tanjung Mas.</p>
            </div>
            <a href="{{ route('admin.logout') }}" class="btn btn-outline btn-sm" style="color:#ef4444; border-color:#ef4444;">
                <i data-lucide="log-out" style="width:15px; height:15px;"></i> Keluar (Logout)
            </a>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        @if(session('success'))
            <div style="padding:1rem 1.25rem; background:var(--brand-primary-light); color:var(--clr-forest-900); border-radius:var(--radius-md); font-weight:600; margin-bottom:2rem;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Edit Data Demografi (Bisa Diubah Kapan Saja Sesuai Permintaan Klien) -->
        <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm); margin-bottom:3rem; border-top:4px solid var(--brand-primary);">
            <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1.25rem;">
                <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-primary-light); color:var(--brand-primary); display:grid; place-items:center;">
                    <i data-lucide="users" style="width:20px; height:20px;"></i>
                </div>
                <div>
                    <h2 style="font-size:1.3rem; color:var(--text-heading);">Edit Data Statistik Kependudukan Desa</h2>
                    <div style="font-size:0.82rem; color:var(--text-muted);">Ubah angka agregat penduduk yang tampil di Beranda dan Halaman Statistik</div>
                </div>
            </div>

            <form action="{{ route('admin.stats.update') }}" method="POST">
                @csrf
                <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:1.25rem; margin-bottom:1.5rem;">
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Total Penduduk (Jiwa)</label>
                        <input type="number" name="total_penduduk" value="{{ $stats->total_penduduk ?? 1155 }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Kepala Keluarga (KK)</label>
                        <input type="number" name="kepala_keluarga" value="{{ $stats->kepala_keluarga ?? 259 }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Laki-laki</label>
                        <input type="number" name="laki_laki" value="{{ $stats->laki_laki ?? 574 }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Perempuan</label>
                        <input type="number" name="perempuan" value="{{ $stats->perempuan ?? 581 }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                </div>

                <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:1.25rem; margin-bottom:1.5rem;">
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Jumlah Dusun</label>
                        <input type="number" name="dusun" value="{{ $stats->dusun ?? 4 }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Jumlah RW</label>
                        <input type="number" name="rw" value="{{ $stats->rw ?? 8 }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Jumlah RT</label>
                        <input type="number" name="rt" value="{{ $stats->rt ?? 16 }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div>
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Luas Wilayah (km&sup2;)</label>
                        <input type="text" name="luas_wilayah" value="{{ $stats->luas_wilayah ?? '150.0' }}" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i data-lucide="save" style="width:16px; height:16px;"></i> Simpan Perubahan Statistik
                </button>
            </form>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2.5rem;">
            <!-- Tambah Berita -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <h3 style="font-size:1.25rem; margin-bottom:1.25rem; color:var(--text-heading); display:flex; align-items:center; gap:0.5rem;">
                    <i data-lucide="newspaper" style="width:18px; height:18px; color:var(--brand-primary);"></i> Publikasikan Warta Desa Baru
                </h3>
                <form action="{{ route('admin.berita.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom:1rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Judul Berita</label>
                        <input type="text" name="judul" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1rem;">
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Kategori</label>
                            <select name="kategori" style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                                <option value="Pembangunan">Pembangunan</option>
                                <option value="Pemerintahan">Pemerintahan</option>
                                <option value="Pertanian">Pertanian &amp; Sawit</option>
                                <option value="Keagamaan">Keagamaan</option>
                                <option value="Sosial">Sosial Warga</option>
                            </select>
                        </div>
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Penulis</label>
                            <input type="text" name="penulis" value="Sekdes M. Anggi Rambe" style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                        </div>
                    </div>
                    <div style="margin-bottom:1rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Ringkasan Pendek</label>
                        <textarea name="ringkasan" rows="2" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);"></textarea>
                    </div>
                    <div style="margin-bottom:1rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Isi Lengkap Berita</label>
                        <textarea name="isi" rows="5" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);"></textarea>
                    </div>
                    <div style="margin-bottom:1.5rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">URL Foto Cover Berita</label>
                        <input type="text" name="gambar" placeholder="https://images.unsplash.com/..." style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <button type="submit" class="btn btn-primary w-full">Terbitkan Berita</button>
                </form>
            </div>

            <!-- Tambah Produk UMKM -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <h3 style="font-size:1.25rem; margin-bottom:1.25rem; color:var(--text-heading); display:flex; align-items:center; gap:0.5rem;">
                    <i data-lucide="store" style="width:18px; height:18px; color:var(--brand-accent);"></i> Tambah Produk Sawit / UMKM
                </h3>
                <form action="{{ route('admin.umkm.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom:1rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Nama Produk / Komoditas</label>
                        <input type="text" name="nama_produk" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1rem;">
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Kategori</label>
                            <select name="kategori" style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                                <option value="Perkebunan">Perkebunan Sawit/Karet</option>
                                <option value="Pertanian">Pertanian &amp; Palawija</option>
                                <option value="Kuliner">Kuliner &amp; Ikan Salai</option>
                                <option value="Kerajinan">Kerajinan Tangan</option>
                            </select>
                        </div>
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Estimasi Harga (Rp)</label>
                            <input type="number" name="harga" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                        </div>
                    </div>
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1rem;">
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Nama Penjual / Kelompok</label>
                            <input type="text" name="penajual" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                        </div>
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">No. WhatsApp Penjual</label>
                            <input type="text" name="telepon" placeholder="62812..." required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                        </div>
                    </div>
                    <div style="margin-bottom:1rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">Deskripsi Produk</label>
                        <textarea name="deskripsi" rows="3" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);"></textarea>
                    </div>
                    <div style="margin-bottom:1.5rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.35rem;">URL Foto Produk</label>
                        <input type="text" name="gambar" placeholder="https://images.unsplash.com/..." style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                    </div>
                    <button type="submit" class="btn btn-accent w-full">Tambah ke Pasar UMKM</button>
                </form>
            </div>
        </div>
    </div>

        <!-- Kelola Peta & Titik Lokasi Desa (Upload Foto & Koordinat) -->
        <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm); margin-bottom:3rem; border-top:4px solid #0891b2;">
            <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; margin-bottom:1.5rem;">
                <div style="display:flex; align-items:center; gap:0.5rem;">
                    <div style="width:36px; height:36px; border-radius:var(--radius-md); background:#cffafe; color:#0891b2; display:grid; place-items:center;">
                        <i data-lucide="map-pin" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <h2 style="font-size:1.3rem; color:var(--text-heading);">Kelola Peta &amp; Foto Lokasi Desa</h2>
                        <div style="font-size:0.82rem; color:var(--text-muted);">Unggah foto bangunan/fasilitas desa, ubah koordinat, dan kelola titik di WebGIS Peta Desa</div>
                    </div>
                </div>

                <button type="button" onclick="document.getElementById('formAddLandmark').scrollIntoView({behavior:'smooth'})" class="btn btn-primary btn-sm">
                    <i data-lucide="plus" style="width:15px; height:15px;"></i> Tambah Lokasi Baru
                </button>
            </div>

            <!-- Tabel Daftar Titik Lokasi & Foto -->
            <div style="overflow-x:auto; margin-bottom:2.5rem;">
                <table style="width:100%; border-collapse:collapse; font-size:0.88rem; text-align:left;">
                    <thead>
                        <tr style="background:var(--bg-subtle); border-bottom:2px solid var(--border-subtle); color:var(--text-muted);">
                            <th style="padding:0.75rem 1rem;">Foto</th>
                            <th style="padding:0.75rem 1rem;">Nama Tempat</th>
                            <th style="padding:0.75rem 1rem;">Kategori</th>
                            <th style="padding:0.75rem 1rem;">Koordinat (Lat, Lng)</th>
                            <th style="padding:0.75rem 1rem; text-align:center;">Ganti Foto</th>
                            <th style="padding:0.75rem 1rem; text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($landmarks as $lm)
                        <tr style="border-bottom:1px solid var(--border-subtle);">
                            <td style="padding:0.75rem 1rem;">
                                @if($lm->foto)
                                <img src="{{ $lm->foto }}" alt="{{ $lm->nama }}" style="width:60px; height:45px; object-fit:cover; border-radius:6px; border:1px solid var(--border-subtle);">
                                @else
                                <span style="font-size:0.75rem; color:var(--text-muted); font-style:italic;">Tanpa Foto</span>
                                @endif
                            </td>
                            <td style="padding:0.75rem 1rem; font-weight:700; color:var(--text-heading);">
                                {{ $lm->nama }}
                                <div style="font-size:0.76rem; color:var(--text-muted); font-weight:normal; margin-top:0.2rem;">{{ Str::limit($lm->deskripsi, 50) }}</div>
                            </td>
                            <td style="padding:0.75rem 1rem;">
                                <span style="display:inline-block; padding:0.2rem 0.6rem; border-radius:9999px; font-size:0.72rem; font-weight:700; background:{{ $lm->badge_bg }}; color:{{ $lm->badge_color }};">
                                    {{ $lm->badge }}
                                </span>
                            </td>
                            <td style="padding:0.75rem 1rem; font-family:monospace; font-size:0.8rem; color:#475569;">
                                {{ number_format((float)$lm->latitude, 6) }}, {{ number_format((float)$lm->longitude, 6) }}
                            </td>
                            <td style="padding:0.75rem 1rem; text-align:center;">
                                <form action="{{ route('admin.landmarks.update', $lm->id) }}" method="POST" enctype="multipart/form-data" style="display:inline-flex; align-items:center; gap:0.4rem;">
                                    @csrf
                                    <label style="cursor:pointer; background:var(--bg-subtle); border:1px solid var(--border-subtle); padding:0.35rem 0.65rem; border-radius:6px; font-size:0.78rem; font-weight:600; display:inline-flex; align-items:center; gap:0.3rem;">
                                        <i data-lucide="upload" style="width:13px; height:13px;"></i> Pilih File
                                        <input type="file" name="foto_file" accept="image/*" onchange="this.form.submit()" style="display:none;">
                                    </label>
                                </form>
                            </td>
                            <td style="padding:0.75rem 1rem; text-align:center;">
                                <form action="{{ route('admin.landmarks.destroy', $lm->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus titik lokasi ini dari peta desa?');" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background:none; border:none; color:#ef4444; cursor:pointer; padding:0.35rem;" title="Hapus Lokasi">
                                        <i data-lucide="trash-2" style="width:16px; height:16px;"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="padding:1.5rem; text-align:center; color:var(--text-muted);">Belum ada titik lokasi di peta.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Form Tambah Lokasi Baru -->
            <div id="formAddLandmark" style="background:var(--bg-subtle); border-radius:var(--radius-md); padding:1.5rem; border:1px dashed var(--border-strong);">
                <h3 style="font-size:1.05rem; color:var(--text-heading); margin-bottom:1rem; display:flex; align-items:center; gap:0.4rem;">
                    <i data-lucide="plus-circle" style="width:18px; height:18px; color:var(--brand-primary);"></i>
                    Formulir Tambah Titik Lokasi &amp; Foto Tempat Baru
                </h3>

                <form action="{{ route('admin.landmarks.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="display:grid; grid-template-columns:2fr 1fr; gap:1.25rem; margin-bottom:1.25rem;">
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Nama Tempat / Bangunan *</label>
                            <input type="text" name="nama" placeholder="Contoh: Pustu Desa Tanjung Mas / Lapangan Voli" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                        </div>
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Kategori *</label>
                            <select name="kategori" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                                <option value="pemerintahan">🏛️ Pusat Pemerintahan</option>
                                <option value="sarana">🕌 Sarana Ibadah / Pendidikan</option>
                                <option value="olahraga">⚽ Sarana Olahraga &amp; Pemuda</option>
                                <option value="kkn">🎓 Posko Mahasiswa (KKN)</option>
                                <option value="umkm">🛍️ UMKM &amp; Kuliner Warga</option>
                                <option value="alam">🌉 Infrastruktur Vital / Aliran Air</option>
                            </select>
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem; margin-bottom:1.25rem;">
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Latitude *</label>
                            <input type="text" name="latitude" placeholder="Contoh: -0.0394343" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                        </div>
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Longitude *</label>
                            <input type="text" name="longitude" placeholder="Contoh: 101.1183128" required style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                        </div>
                    </div>

                    <div style="margin-bottom:1.25rem;">
                        <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Deskripsi Singkat Tempat</label>
                        <textarea name="deskripsi" rows="2" placeholder="Jelaskan fungsi bangunan, layanan, atau kegiatan warga di lokasi ini..." style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main); font-family:inherit;"></textarea>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem; margin-bottom:1.5rem;">
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Unggah Foto Tempat (File dari HP / Laptop)</label>
                            <input type="file" name="foto_file" accept="image/*" style="width:100%; padding:0.5rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                            <span style="font-size:0.75rem; color:var(--text-muted);">Format JPG, PNG, atau WEBP</span>
                        </div>
                        <div>
                            <label style="display:block; font-size:0.85rem; font-weight:700; margin-bottom:0.4rem;">Atau Masukkan URL Link Foto (Opsional)</label>
                            <input type="url" name="foto_url" placeholder="https://..." style="width:100%; padding:0.6rem 0.85rem; border:1px solid var(--border-strong); border-radius:var(--radius-md); background:var(--bg-body); color:var(--text-main);">
                            <span style="font-size:0.75rem; color:var(--text-muted);">Gunakan link gambar langsung jika foto tersimpan online</span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i data-lucide="save" style="width:16px; height:16px;"></i> Simpan Titik Lokasi &amp; Tampilkan di Peta
                    </button>
                </form>
            </div>
        </div>

</section>
@endsection