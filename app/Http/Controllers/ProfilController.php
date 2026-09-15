<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDesa;
use App\Models\Kependudukan;
use App\Models\Landmark;

class ProfilController extends Controller {
    public function index() {
        $perangkat = PerangkatDesa::all();
        $stats = Kependudukan::first();

        $sejarahKronologi = [
            ['tahun' => '1980', 'peristiwa' => 'Penduduk kampung tua Lengung (pecahan Teluk Paman) sering dilanda banjir tahunan, lalu bermusyawarah membuka pemukiman baru di hutan belantara Tanjung Mas dan Tanjung Harapan.'],
            ['tahun' => '1984', 'peristiwa' => 'Tanjung Mas berkembang menjadi dusun dari Desa Teluk Paman dengan 35 KK dan 135 jiwa penduduk.'],
            ['tahun' => '2000 - 2002', 'peristiwa' => 'Pertumbuhan pesat menjadi 120 KK (425 jiwa) dan terus bertambah menjadi 154 KK (510 jiwa).'],
            ['tahun' => '2008', 'peristiwa' => 'Desa Tanjung Mas resmi dimekarkan dari Desa Tanjung Harapan. BUHARIS menjabat sebagai Pjs. Kepala Desa pertama dan RIDWAN sebagai Sekdes.'],
            ['tahun' => '2010 - 2013', 'peristiwa' => 'Pilkades definitif pertama: BUHARIS terpilih sebagai Kepala Desa definitif, ARIANTO sebagai Sekdes.'],
            ['tahun' => '2014 - 2015', 'peristiwa' => 'IRIANTO menjabat sebagai Pj. Kepala Desa dan ARIANTO sebagai Sekdes.'],
            ['tahun' => '2016 - 2017', 'peristiwa' => 'SALMAN JAMALUDDIN menjabat sebagai Kepala Desa dan ARIANTO sebagai Sekdes.'],
            ['tahun' => '2017 - 2020', 'peristiwa' => 'Pilkades serentak Kabupaten Kampar: BUHARIS terpilih kembali untuk periode 2017-2023 dengan Sekdes BUDI HARIZAL.'],
            ['tahun' => '2020 - 2023', 'peristiwa' => 'EDISON, SE sebagai Kepala Desa dan MHD. ANGGI RAMBE sebagai Sekdes.'],
            ['tahun' => '2024 - 2025', 'peristiwa' => 'TARMIZI, S.Pd, MM menjabat Pj. Kepala Desa dan MHD. ANGGI RAMBE sebagai Sekdes.'],
            ['tahun' => '2025 - 2027', 'peristiwa' => 'BUHARIS diangkat kembali sebagai Kepala Desa dan MUHAMMAD ANGGI RAMBE, S.A.P sebagai Sekretaris Desa.']
        ];

        $bpd = [
            'ketua' => 'NURYANTO',
            'wakil' => 'ARRY ANTONI',
            'anggota' => [
                'M. RIJAL SIREGAR',
                'WANDRI',
                'ARDI WIJAYA SIREGAR',
                'ELI MARLINA',
                'ROSNAWATI'
            ]
        ];

        $lembagaKemasyarakatan = [
            ['nama' => 'Lembaga Pemberdayaan Masyarakat (LPMD)', 'anggota' => '13 Orang', 'icon' => 'hammer', 'deskripsi' => 'Penggerak partisipasi dan gotong royong warga dalam pembangunan fisik desa.'],
            ['nama' => 'Tim Penggerak PKK & Posyandu', 'anggota' => '4 Pengurus & 1 Posyandu', 'icon' => 'heart-handshake', 'deskripsi' => 'Pemberdayaan kesejahteraan keluarga, posyandu balita & lansia.'],
            ['nama' => 'Kelompok Wirid Pengajian', 'anggota' => '4 Kelompok', 'icon' => 'book-open', 'deskripsi' => 'Kegiatan keagamaan dan pengajian rutin mingguan warga di 4 dusun.'],
            ['nama' => 'Kelompok Arisan Warga', 'anggota' => '4 Kelompok', 'icon' => 'users', 'deskripsi' => 'Penguatan silaturahmi dan ekonomi sosial kaum perempuan desa.'],
            ['nama' => 'Gapoktan & Kelompok Tani', 'anggota' => '2 Kelompok', 'icon' => 'trees', 'deskripsi' => 'Wadah pembinaan petani kebun kelapa sawit (500 Ha) dan karet (225 Ha).'],
            ['nama' => 'Karang Taruna "Karya Muda"', 'anggota' => '1 Kelompok', 'icon' => 'users-round', 'deskripsi' => 'Wadah kreativitas, olahraga, dan bakti sosial generasi muda desa.']
        ];

        $landmarks = Landmark::orderBy('urutan')->get();
        return view('profil.index', compact('perangkat', 'stats', 'sejarahKronologi', 'bpd', 'lembagaKemasyarakatan', 'landmarks'));
    }
}