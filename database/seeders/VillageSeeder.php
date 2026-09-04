<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use App\Models\Umkm;
use App\Models\Apbdes;
use App\Models\Kependudukan;
use App\Models\PerangkatDesa;

class VillageSeeder extends Seeder {
    public function run(): void {
        Kependudukan::create([
            'total_penduduk' => 1155,
            'kepala_keluarga' => 259,
            'laki_laki' => 574,
            'perempuan' => 581,
            'rt' => 16,
            'rw' => 8,
            'dusun' => 4,
            'luas_wilayah' => '150.0' // 150 km2
        ]);

        PerangkatDesa::insert([
            ['nama' => 'BUHARIS', 'jabatan' => 'Kepala Desa', 'foto' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400'],
            ['nama' => 'MUHAMMAD ANGGI RAMBE, S.A.P', 'jabatan' => 'Sekretaris Desa', 'foto' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400'],
            ['nama' => 'BUDI HARIZAL, S.E', 'jabatan' => 'Kasi Pelayanan & Kesejahteraan', 'foto' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400'],
            ['nama' => 'GINDA SUHADI. S', 'jabatan' => 'Kasi Pemerintahan', 'foto' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400'],
            ['nama' => 'RUSDI WARMAN', 'jabatan' => 'Kaur Keuangan', 'foto' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400'],
            ['nama' => 'SYAMSUIR', 'jabatan' => 'Kaur Umum & Perencanaan', 'foto' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400'],
            ['nama' => 'ADE CANDRA IRAWAN', 'jabatan' => 'Kepala Dusun I Tanjung Mas', 'foto' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400'],
            ['nama' => 'SARIYAL', 'jabatan' => 'Kepala Dusun II Pasir Putih', 'foto' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400'],
            ['nama' => 'WAHYUDI', 'jabatan' => 'Kepala Dusun III Sungai Setingkai', 'foto' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=400'],
            ['nama' => 'GUSTIN HARAHAP', 'jabatan' => 'Kepala Dusun IV Sungai Napal', 'foto' => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=400']
        ]);

        Berita::insert([
            [
                'judul' => 'Pemerintah Desa Tanjung Mas Gelar Musrenbangdes Penetapan Program Prioritas',
                'slug' => 'pemerintah-desa-tanjung-mas-gelar-musrenbangdes-penetapan-program-prioritas',
                'kategori' => 'Pembangunan',
                'penulis' => 'Sekdes M. Anggi Rambe',
                'ringkasan' => 'Musyawarah perencanaan pembangunan desa dihadiri oleh Kades Buharis, BPD, dan perangkat desa untuk memprioritaskan perbaikan jalan poros dan jalan usaha tani.',
                'isi' => 'Pemerintah Desa Tanjung Mas, Kecamatan Kampar Kiri sukses menyelenggarakan Musrenbangdes. Agenda difokuskan pada peningkatan akses jalan poros 13 Km menuju ibukota kecamatan Lipat Kain serta penguatan sarana perkebunan sawit dan karet rakyat seluas 725 Ha.',
                'gambar' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Kegiatan Rutin Pengajian dan Arisan Kaum Perempuan Desa Tanjung Mas',
                'slug' => 'kegiatan-rutin-pengajian-dan-arisan-kaum-perempuan-desa-tanjung-mas',
                'kategori' => 'Keagamaan',
                'penulis' => 'PKK Tanjung Mas',
                'ringkasan' => 'Kehidupan sosial perempuan Desa Tanjung Mas sangat aktif melalui 4 kelompok wirid pengajian dan 4 kelompok arisan mingguan.',
                'isi' => 'Kegiatan kaum perempuan di Desa Tanjung Mas terus berjalan harmonis dan dinamis. Terbagi dalam 4 kelompok pengajian serta kelompok arisan di 4 dusun, kegiatan ini menjadi wadah silaturahmi dan penguatan nilai kekeluargaan warga.',
                'gambar' => 'https://images.unsplash.com/photo-1564769625905-50e93615e769?w=800',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Penyuluhan Petani Kelapa Sawit & Karet Mandiri di Balai Desa Tanjung Mas',
                'slug' => 'penyuluhan-petani-kelapa-sawit-karet-mandiri-di-balai-desa-tanjung-mas',
                'kategori' => 'Pertanian',
                'penulis' => 'PPL Kampar Kiri',
                'ringkasan' => 'Edukasi teknik budidaya dan pemupukan berimbang untuk 500 Ha kebun sawit dan 225 Ha kebun karet warga.',
                'isi' => 'Pemerintah Desa bekerjasama dengan Gapoktan dan PPL mengadakan bimbingan teknis budidaya perkebunan rakyat. Diharapkan hasil panen sawit dan karet warga Tanjung Mas semakin meningkat dan stabil.',
                'gambar' => 'https://images.unsplash.com/photo-1584467735871-8e85353a8413?w=800',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        Umkm::insert([
            [
                'nama_produk' => 'Bibit Sawit Unggul Bersertifikat',
                'kategori' => 'Perkebunan',
                'harga' => 45000,
                'penjual' => 'Poktan Sawit Tanjung Mas',
                'telepon' => '6281234567890',
                'deskripsi' => 'Bibit kelapa sawit siap tanam dari kelompok tani Desa Tanjung Mas untuk peremajaan kebun rakyat 500 Ha.',
                'gambar' => 'https://images.unsplash.com/photo-1584467735871-8e85353a8413?w=600',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_produk' => 'Bahan Olahan Karet (Bokar) Bersih',
                'kategori' => 'Perkebunan',
                'harga' => 13500,
                'penjual' => 'Kelompok Tani Karet Dusun II',
                'telepon' => '6281234567890',
                'deskripsi' => 'Hasil sadapan getah karet alam berkualitas tinggi dari perkebunan karet 225 Ha Tanjung Mas.',
                'gambar' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=600',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_produk' => 'Ikan Salai Sungai Kampar Khas Riau',
                'kategori' => 'Kuliner',
                'harga' => 65000,
                'penjual' => 'Nelayan Sungai Kampar Kiri',
                'telepon' => '6281234567890',
                'deskripsi' => 'Ikan asap tangkapan 80 nelayan sungai Kampar Kiri dengan aroma asap kayu alami khas Riau.',
                'gambar' => 'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?w=600',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_produk' => 'Keripik Singkong & Olahan Pangan Lokal',
                'kategori' => 'Kuliner',
                'harga' => 15000,
                'penjual' => 'Kelompok Perempuan PKK',
                'telepon' => '6281234567890',
                'deskripsi' => 'Olahan hasil tanaman singkong 10 Ha warga dengan cita rasa gurih renyah.',
                'gambar' => 'https://images.unsplash.com/photo-1566478989037-eec170784d0b?w=600',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        Apbdes::insert([
            ['jenis' => 'pendapatan', 'nama_pos' => 'Dana Desa (DD) APBN', 'jumlah' => 890000000, 'persen' => 54],
            ['jenis' => 'pendapatan', 'nama_pos' => 'Alokasi Dana Desa (ADD) Kampar', 'jumlah' => 560000000, 'persen' => 34],
            ['jenis' => 'pendapatan', 'nama_pos' => 'Bantuan Keuangan Khusus Provinsi Riau', 'jumlah' => 100000000, 'persen' => 6],
            ['jenis' => 'pendapatan', 'nama_pos' => 'Pendapatan Asli Desa (PADes)', 'jumlah' => 90000000, 'persen' => 6],

            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Pembangunan & Jalan Usaha Tani', 'jumlah' => 780000000, 'persen' => 48],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Penyelenggaraan Pemerintahan', 'jumlah' => 460000000, 'persen' => 28],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Pemberdayaan Petani & UMKM', 'jumlah' => 240000000, 'persen' => 15],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Pembinaan Kemasyarakatan & Keagamaan', 'jumlah' => 110000000, 'persen' => 7],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Penanggulangan Bencana Darurat', 'jumlah' => 50000000, 'persen' => 2]
        ]);
    }
}