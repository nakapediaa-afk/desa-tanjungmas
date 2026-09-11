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
            ['nama' => 'BUHARIS', 'jabatan' => 'Kepala Desa', 'foto' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'MUHAMMAD ANGGI RAMBE, S.A.P', 'jabatan' => 'Sekretaris Desa', 'foto' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'BUDI HARIZAL, S.E', 'jabatan' => 'Kasi Pelayanan & Kesejahteraan', 'foto' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'GINDA SUHADI. S', 'jabatan' => 'Kasi Pemerintahan', 'foto' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'RUSDI WARMAN', 'jabatan' => 'Kaur Keuangan', 'foto' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'SYAMSUIR', 'jabatan' => 'Kaur Umum & Perencanaan', 'foto' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'ADE CANDRA IRAWAN', 'jabatan' => 'Kepala Dusun I Tanjung Mas', 'foto' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'SARIYAL', 'jabatan' => 'Kepala Dusun II Pasir Putih', 'foto' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'WAHYUDI', 'jabatan' => 'Kepala Dusun III Sungai Setingkai', 'foto' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=400&auto=format&fit=crop&q=80'],
            ['nama' => 'GUSTIN HARAHAP', 'jabatan' => 'Kepala Dusun IV Sungai Napal', 'foto' => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=400&auto=format&fit=crop&q=80']
        ]);

        Berita::insert([
            [
                'judul' => 'Musrenbangdes 2025: Penetapan Peningkatan Jalan Poros 13 Km Menuju Lipat Kain',
                'slug' => 'musrenbangdes-2025-penetapan-peningkatan-jalan-poros-13-km-menuju-lipat-kain',
                'kategori' => 'Pembangunan',
                'penulis' => 'Sekdes M. Anggi Rambe, S.A.P',
                'ringkasan' => 'Pemerintah Desa Tanjung Mas bersama BPD dan tokoh masyarakat menyepakati prioritas pengerasan dan pemeliharaan jalan poros penghubung sentra perkebunan ke ibu kota kecamatan.',
                'isi' => 'Pemerintah Desa Tanjung Mas sukses menggelar Musyawarah Perencanaan Pembangunan Desa (Musrenbangdes) Tahun 2025. Forum yang dipimpin langsung oleh Kepala Desa Buharis dan didampingi Sekretaris Desa Muhammad Anggi Rambe, S.A.P bersama jajaran BPD menyepakati pengalokasian dana prioritas untuk peningkatan akses jalan poros sepanjang 13 Km menuju Lipat Kain. Langkah ini diambil guna memperlancar distribusi hasil panen 500 Ha kelapa sawit dan 225 Ha kebun karet warga serta mempermudah mobilitas anak sekolah dan pelayanan rujukan kesehatan.',
                'gambar' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2)
            ],
            [
                'judul' => 'Penyaluran Bantuan Saprodi & Edukasi Peremajaan Perkebunan Kelapa Sawit Rakyat',
                'slug' => 'penyaluran-bantuan-saprodi-edukasi-peremajaan-perkebunan-kelapa-sawit-rakyat',
                'kategori' => 'Pertanian & Perkebunan',
                'penulis' => 'Kaur Perencanaan Syamsuir',
                'ringkasan' => 'Dukungan nyata bagi 500 Ha kebun sawit swadaya melalui program bantuan pupuk berimbang dan bimbingan pencegahan hama.',
                'isi' => 'Dalam rangka menjaga produktivitas komoditas utama desa, Pemerintah Desa Tanjung Mas menyalurkan sarana produksi pertanian (Saprodi) bagi kelompok tani perkebunan. Bertempat di Balai Pertemuan Desa, kegiatan ini didampingi oleh petugas penyuluh pertanian lapangan (PPL) Kampar Kiri untuk memberikan edukasi teknik pemupukan berimbang dan pengelolaan kebun berkelanjutan.',
                'gambar' => 'https://images.unsplash.com/photo-1584467735871-8e85353a8413?w=800&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5)
            ],
            [
                'judul' => 'Layanan Kesehatan Terpadu Posyandu Balita & Lansia di 4 Dusun Desa Tanjung Mas',
                'slug' => 'layanan-kesehatan-terpadu-posyandu-balita-lansia-di-4-dusun-desa-tanjung-mas',
                'kategori' => 'Kesehatan',
                'penulis' => 'Kasi Pelayanan Budi Harizal, S.E',
                'ringkasan' => 'Pemeriksaan kesehatan gratis, pemantauan gizi balita, dan pemberian vitamin rutin serentak di Dusun I, II, III, dan IV.',
                'isi' => 'Kader Posyandu bersama bidan desa dan tenaga medis Puskesmas Kampar Kiri menyelenggarakan pemeriksaan kesehatan terpadu bagi warga di 4 Dusun: Tanjung Mas, Pasir Putih, Sungai Setingkai, dan Sungai Napal. Program ini mencakup pengukuran tumbuh kembang anak, penimbangan balita, pembagian makanan tambahan bergizi, serta cek tensi dan gula darah gratis bagi para lansia.',
                'gambar' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(8),
                'updated_at' => now()->subDays(8)
            ],
            [
                'judul' => 'Penguatan Harmoni Warga Lewat Wirid Pengajian & Arisan Kaum Perempuan PKK',
                'slug' => 'penguatan-harmoni-warga-lewat-wirid-pengajian-arisan-kaum-perempuan-pkk',
                'kategori' => 'Kemasyarakatan',
                'penulis' => 'Tim Penggerak PKK Desa',
                'ringkasan' => 'Kehidupan sosial perempuan desa aktif di 4 kelompok wirid pengajian dan arisan dusun sebagai wadah silaturahmi.',
                'isi' => 'Kekeluargaan dan kebersamaan warga Desa Tanjung Mas terus terjaga erat melalui kegiatan mingguan kelompok wirid pengajian dan arisan kaum perempuan. Selain memperdalam ilmu agama, kegiatan ini dimanfaatkan sebagai wadah diskusi pemberdayaan ekonomi keluarga dan pelatihan keterampilan olahan pangan lokal.',
                'gambar' => 'https://images.unsplash.com/photo-1564769625905-50e93615e769?w=800&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(12),
                'updated_at' => now()->subDays(12)
            ],
            [
                'judul' => 'Penyaluran BLT Dana Desa (DD) Tahap I Tahun 2025 Berjalan Tertib dan Tepat Sasaran',
                'slug' => 'penyaluran-blt-dana-desa-tahap-i-tahun-2025-berjalan-tertib-dan-tepat-sasaran',
                'kategori' => 'Pemerintahan',
                'penulis' => 'Kaur Keuangan Rusdi Warman',
                'ringkasan' => 'Bantuan Langsung Tunai diserahkan langsung oleh Kepala Desa Buharis kepada keluarga penerima manfaat sesuai musdesus.',
                'isi' => 'Pemerintah Desa Tanjung Mas telah menyalurkan Bantuan Langsung Tunai Dana Desa (BLT-DD) Tahap I Tahun Anggaran 2025. Penyaluran disaksikan oleh BPD, Bhabinkamtibmas, Babinsa, dan pendamping desa. Kepala Desa Buharis berpesan agar bantuan tunai ini dimanfaatkan sebaik-baiknya untuk pemenuhan kebutuhan pokok keluarga.',
                'gambar' => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(16),
                'updated_at' => now()->subDays(16)
            ]
        ]);

        Umkm::insert([
            [
                'nama_produk' => 'Bibit Kelapa Sawit Unggul Bersertifikat',
                'kategori' => 'Perkebunan',
                'harga' => 45000,
                'penjual' => 'Poktan Sawit Tanjung Mas',
                'telepon' => '6281234567890',
                'deskripsi' => 'Bibit sawit siap tanam varietas unggul bersertifikat untuk peremajaan kebun rakyat 500 Ha di Desa Tanjung Mas.',
                'gambar' => 'https://images.unsplash.com/photo-1584467735871-8e85353a8413?w=600&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4)
            ],
            [
                'nama_produk' => 'Bahan Olahan Karet (Bokar) Bersih & Kering',
                'kategori' => 'Perkebunan',
                'harga' => 13500,
                'penjual' => 'Kelompok Tani Karet Dusun II Pasir Putih',
                'telepon' => '6281234567890',
                'deskripsi' => 'Getah karet alam olahan bersih dari hamparan kebun karet 225 Ha Tanjung Mas dengan standar kadar karet kering (KKK) tinggi.',
                'gambar' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=600&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(6),
                'updated_at' => now()->subDays(6)
            ],
            [
                'nama_produk' => 'Ikan Salai Sungai Kampar Khas Riau (Asap Alami)',
                'kategori' => 'Kuliner',
                'harga' => 65000,
                'penjual' => 'Kelompok Nelayan Sungai Kampar Kiri',
                'telepon' => '6281234567890',
                'deskripsi' => 'Ikan asap tradisional tangkapan 80 nelayan sungai Kampar Kiri dengan proses pengasapan kayu alami yang gurih dan tahan lama.',
                'gambar' => 'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?w=600&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10)
            ],
            [
                'nama_produk' => 'Keripik Singkong Gurih & Aneka Olahan Pangan PKK',
                'kategori' => 'Kuliner',
                'harga' => 15000,
                'penjual' => 'Kelompok Usaha Perempuan PKK Tanjung Mas',
                'telepon' => '6281234567890',
                'deskripsi' => 'Camilan renyah berkualitas diproduksi higienis dari hasil panen tanaman singkong 10 Ha warga desa.',
                'gambar' => 'https://images.unsplash.com/photo-1566478989037-eec170784d0b?w=600&auto=format&fit=crop&q=80',
                'created_at' => now()->subDays(14),
                'updated_at' => now()->subDays(14)
            ]
        ]);

        Apbdes::insert([
            ['jenis' => 'pendapatan', 'nama_pos' => 'Dana Desa (DD) APBN', 'jumlah' => 890000000, 'persen' => 54],
            ['jenis' => 'pendapatan', 'nama_pos' => 'Alokasi Dana Desa (ADD) APBD Kampar', 'jumlah' => 560000000, 'persen' => 34],
            ['jenis' => 'pendapatan', 'nama_pos' => 'Bantuan Keuangan Khusus (BKK) Provinsi Riau', 'jumlah' => 100000000, 'persen' => 6],
            ['jenis' => 'pendapatan', 'nama_pos' => 'Pendapatan Asli Desa (PADes)', 'jumlah' => 90000000, 'persen' => 6],

            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Pembangunan & Jalan Usaha Tani (13 Km)', 'jumlah' => 780000000, 'persen' => 48],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Penyelenggaraan Pemerintahan Desa', 'jumlah' => 460000000, 'persen' => 28],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Pemberdayaan Petani Sawit, Karet & UMKM', 'jumlah' => 240000000, 'persen' => 15],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Pembinaan Kemasyarakatan, Posyandu & Wirid', 'jumlah' => 110000000, 'persen' => 7],
            ['jenis' => 'belanja', 'nama_pos' => 'Bidang Penanggulangan Bencana & Keadaan Darurat', 'jumlah' => 50000000, 'persen' => 2]
        ]);
    }
}
