<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Landmark;

class LandmarkSeeder extends Seeder {
    public function run(): void {
        Landmark::truncate();

        $landmarks = [
            [
                'slug' => 'kantor-desa',
                'nama' => 'Kantor Desa Tanjung Mas',
                'kategori' => 'pemerintahan',
                'latitude' => '-0.0394343050684987',
                'longitude' => '101.11831278472829',
                'deskripsi' => 'Pusat tata kelola pemerintahan desa, pelayanan surat administrasi kependudukan warga, dan balai musyawarah masyarakat Desa Tanjung Mas.',
                'foto' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?w=800&auto=format&fit=crop&q=80',
                'icon' => '🏛️',
                'pin_class' => 'pin-kantor',
                'badge' => 'Pusat Pemerintahan',
                'badge_bg' => '#ffe4e6',
                'badge_color' => '#e11d48',
                'meta' => [
                    'Kepala Desa: <strong>BUHARIS</strong>',
                    'Sekretaris Desa: <strong>MUHAMMAD ANGGI RAMBE, S.A.P</strong>',
                    'Jam Pelayanan: Senin - Jumat (08.00 - 15.30 WIB)'
                ],
                'urutan' => 1
            ],
            [
                'slug' => 'stadion-tanjung-mas',
                'nama' => 'Stadion Tanjung Mas',
                'kategori' => 'olahraga',
                'latitude' => '-0.03809274611092639',
                'longitude' => '101.11785873794389',
                'deskripsi' => 'Lapangan sepak bola utama dan pusat turnamen pemuda desa serta kegiatan perayaan hari kemerdekaan dan keolahragaan.',
                'foto' => 'https://images.unsplash.com/photo-1529900245534-47fbf867b140?w=800&auto=format&fit=crop&q=80',
                'icon' => '⚽',
                'pin_class' => 'pin-stadion',
                'badge' => 'Sarana Olahraga',
                'badge_bg' => '#d1fae5',
                'badge_color' => '#059669',
                'meta' => [
                    'Fasilitas: Lapangan Bola &amp; Tribun Terbuka',
                    'Pengelola: Pemuda Karang Taruna Desa'
                ],
                'urutan' => 2
            ],
            [
                'slug' => 'masjid-al-ikhlas',
                'nama' => 'Masjid Al Ikhlas',
                'kategori' => 'sarana',
                'latitude' => '-0.03491013564125363',
                'longitude' => '101.11110477658805',
                'deskripsi' => 'Masjid utama desa sebagai pusat shalat berjamaah, pengajian akbar, peringatan hari besar Islam, dan pembinaan majelis taklim.',
                'foto' => 'https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=800&auto=format&fit=crop&q=80',
                'icon' => '🕌',
                'pin_class' => 'pin-masjid',
                'badge' => 'Sarana Ibadah',
                'badge_bg' => '#ccfbf1',
                'badge_color' => '#0f766e',
                'meta' => [
                    'Status: Masjid Jami Desa Tanjung Mas',
                    'Kegiatan: Shalat 5 Waktu, Majelis Taklim, TPA/MDA'
                ],
                'urutan' => 3
            ],
            [
                'slug' => 'sd-n-020-desa-tanjung-mas',
                'nama' => 'SD N 020 Desa Tanjung Mas',
                'kategori' => 'sarana',
                'latitude' => '-0.035369617472599764',
                'longitude' => '101.1115008732436',
                'deskripsi' => 'Sekolah Dasar Negeri 020 yang mendidik dan membina tunas bangsa generasi penerus masyarakat Desa Tanjung Mas.',
                'foto' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&auto=format&fit=crop&q=80',
                'icon' => '🏫',
                'pin_class' => 'pin-sekolah',
                'badge' => 'Pendidikan Dasar',
                'badge_bg' => '#dbeafe',
                'badge_color' => '#2563eb',
                'meta' => [
                    'Jenjang: Sekolah Dasar Negeri (SDN)',
                    'Status: Terakreditasi Kemendikbud'
                ],
                'urutan' => 4
            ],
            [
                'slug' => 'posko-kkn-2026',
                'nama' => 'Posko KKN 2026 (KATAMAS)',
                'kategori' => 'kkn',
                'latitude' => '-0.03500384516210058',
                'longitude' => '101.11509114343623',
                'deskripsi' => 'Pusat posko mahasiswa Kuliah Kerja Nyata (KKN) 2026 KATAMAS yang aktif mengabdi memajukan desa dan digitalisasi UMKM.',
                'foto' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&auto=format&fit=crop&q=80',
                'icon' => '🎓',
                'pin_class' => 'pin-posko',
                'badge' => 'Posko Mahasiswa',
                'badge_bg' => '#f3e8ff',
                'badge_color' => '#7c3aed',
                'meta' => [
                    'Program: KKN Tematik &amp; Pemberdayaan Warga',
                    'Mitra: Pemerintah Desa Tanjung Mas'
                ],
                'urutan' => 5
            ],
            [
                'slug' => 'endang-laundry',
                'nama' => 'Endang Laundry',
                'kategori' => 'umkm',
                'latitude' => '-0.03579608863801613',
                'longitude' => '101.1187371097514',
                'deskripsi' => 'Usaha binatu dan pencucian pakaian kiloan warga terpercaya, bersih, rapi, dan harum.',
                'foto' => 'https://images.unsplash.com/photo-1545173168-9f1947eebb7f?w=800&auto=format&fit=crop&q=80',
                'icon' => '🧺',
                'pin_class' => 'pin-umkm',
                'badge' => 'UMKM Jasa',
                'badge_bg' => '#fef3c7',
                'badge_color' => '#d97706',
                'meta' => [
                    'Kategori: Jasa Cuci Kiloan &amp; Satuan',
                    'Layanan: Antar Jemput Warga Sekitar'
                ],
                'urutan' => 6
            ],
            [
                'slug' => 'rm-jewel-and-jenny',
                'nama' => 'Rumah Makan Jewel and Jenny',
                'kategori' => 'umkm',
                'latitude' => '-0.035725050634152614',
                'longitude' => '101.11956638882182',
                'deskripsi' => 'Rumah makan favorit warga dan pelintas jalan menyajikan aneka sajian masakan khas nusantara dan lauk lezat berselera.',
                'foto' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800&auto=format&fit=crop&q=80',
                'icon' => '🍽️',
                'pin_class' => 'pin-umkm',
                'badge' => 'Kuliner Lokal',
                'badge_bg' => '#ffedd5',
                'badge_color' => '#ea580c',
                'meta' => [
                    'Menu Unggulan: Masakan Ikan Sungai &amp; Lauk Kampung',
                    'Layanan: Makan di Tempat &amp; Pesanan Nasi Kotak'
                ],
                'urutan' => 7
            ],
            [
                'slug' => 'toko-sitar-raja-tani',
                'nama' => 'Toko Sitar Raja Tani',
                'kategori' => 'umkm',
                'latitude' => '-0.035792065319827274',
                'longitude' => '101.12054117020318',
                'deskripsi' => 'Penyedia sarana produksi pertanian terlengkap, pupuk tanaman sawit &amp; karet, herbisida, dan perlengkapan perkebunan petani.',
                'foto' => 'https://images.unsplash.com/photo-1589923188900-85dae523342b?w=800&auto=format&fit=crop&q=80',
                'icon' => '🌾',
                'pin_class' => 'pin-umkm',
                'badge' => 'Saprotan Pertanian',
                'badge_bg' => '#ecfccb',
                'badge_color' => '#65a30d',
                'meta' => [
                    'Komoditas: Pupuk, Obat Hama, Alat Pertanian',
                    'Pelayanan: Petani Sawit &amp; Karet Rakyat'
                ],
                'urutan' => 8
            ],
            [
                'slug' => 'jembatan-gantung',
                'nama' => 'Jembatan Gantung',
                'kategori' => 'alam',
                'latitude' => '-0.029113756100239137',
                'longitude' => '101.11129655828843',
                'deskripsi' => 'Infrastruktur jembatan gantung ikonik yang menghubungkan akses transportasi, mobilitas warga, dan jalur angkut hasil kebun.',
                'foto' => 'https://images.unsplash.com/photo-1545558014-8692077e9b5c?w=800&auto=format&fit=crop&q=80',
                'icon' => '🌉',
                'pin_class' => 'pin-jembatan',
                'badge' => 'Infrastruktur Vital',
                'badge_bg' => '#cffafe',
                'badge_color' => '#0891b2',
                'meta' => [
                    'Fungsi: Jembatan Penyeberangan Roda 2 &amp; Pejalan Kaki',
                    'Lokasi: Melintasi Aliran Sungai Setingkai'
                ],
                'urutan' => 9
            ],
            [
                'slug' => 'sungai-setingkai',
                'nama' => 'Sungai Setingkai',
                'kategori' => 'alam',
                'latitude' => '-0.029239586357994438',
                'longitude' => '101.11165030714561',
                'deskripsi' => 'Aliran sungai alami yang asri, sumber air vital bagi ekosistem pertanian, dan spot pemancingan ikan tradisional warga lokal.',
                'foto' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800&auto=format&fit=crop&q=80',
                'icon' => '🌊',
                'pin_class' => 'pin-sungai',
                'badge' => 'Geografis Alami',
                'badge_bg' => '#e0f2fe',
                'badge_color' => '#0284c7',
                'meta' => [
                    'Aliran: Mengalir ke Daerah Aliran Sungai Kampar Kiri',
                    'Potensi: Perikanan Sungai &amp; Irigasi Alami'
                ],
                'urutan' => 10
            ]
        ];

        foreach ($landmarks as $item) {
            Landmark::create($item);
        }
    }
}
