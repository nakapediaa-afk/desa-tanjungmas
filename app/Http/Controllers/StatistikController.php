<?php

namespace App\Http\Controllers;

use App\Models\Kependudukan;

class StatistikController extends Controller {
    public function index() {
        $stats = Kependudukan::first();

        $dusunData = [
            ['nama' => 'Dusun I Tanjung Mas', 'rw' => 2, 'rt' => 4, 'kadus' => 'ADE CANDRA IRAWAN'],
            ['nama' => 'Dusun II Pasir Putih', 'rw' => 2, 'rt' => 4, 'kadus' => 'SARIYAL'],
            ['nama' => 'Dusun III Sungai Setingkai', 'rw' => 2, 'rt' => 4, 'kadus' => 'WAHYUDI'],
            ['nama' => 'Dusun IV Sungai Napal', 'rw' => 2, 'rt' => 4, 'kadus' => 'GUSTIN HARAHAP']
        ];

        $pekerjaanData = [
            ['pekerjaan' => 'Petani & Pekebun (Sawit & Karet)', 'jumlah' => 1147, 'icon' => 'trees'],
            ['pekerjaan' => 'Nelayan Sungai Kampar', 'jumlah' => 80, 'icon' => 'fish'],
            ['pekerjaan' => 'Karyawan Swasta', 'jumlah' => 30, 'icon' => 'building'],
            ['pekerjaan' => 'Pedagang / Warung', 'jumlah' => 20, 'icon' => 'store'],
            ['pekerjaan' => 'Buruh Harian Lepas', 'jumlah' => 11, 'icon' => 'hard-hat'],
            ['pekerjaan' => 'Tukang Bangunan', 'jumlah' => 5, 'icon' => 'hammer'],
            ['pekerjaan' => 'Sektor Jasa', 'jumlah' => 5, 'icon' => 'briefcase']
        ];

        $lahanData = [
            ['komoditas' => 'Perkebunan Kelapa Sawit', 'luas' => '500 Ha', 'persen' => 65],
            ['komoditas' => 'Perkebunan Karet Alam', 'luas' => '225 Ha', 'persen' => 29],
            ['komoditas' => 'Padi Ladang', 'luas' => '15 Ha', 'persen' => 2],
            ['komoditas' => 'Tanaman Singkong', 'luas' => '10 Ha', 'persen' => 1.5],
            ['komoditas' => 'Gaharu & Palawija', 'luas' => '8 Ha', 'persen' => 1.5],
            ['komoditas' => 'Tebu, Kelapa & Pinang', 'luas' => '6 Ha', 'persen' => 1]
        ];

        $pendidikanData = [
            ['tingkat' => 'Tamat SD', 'jumlah' => 216],
            ['tingkat' => 'Putus Sekolah', 'jumlah' => 121],
            ['tingkat' => 'Tamat SLTP / MTs', 'jumlah' => 32],
            ['tingkat' => 'Tamat SLTA / MA', 'jumlah' => 23],
            ['tingkat' => 'Diploma III (D3)', 'jumlah' => 23],
            ['tingkat' => 'Sarjana (S1)', 'jumlah' => 20],
            ['tingkat' => 'PAUD / TK', 'jumlah' => 20],
            ['tingkat' => 'Buta Huruf', 'jumlah' => 20]
        ];

        $peternakanData = [
            ['hewan' => 'Ayam Kampung / Pedaging', 'populasi' => '1.300 Ekor'],
            ['hewan' => 'Itik / Bebek', 'populasi' => '100 Ekor'],
            ['hewan' => 'Kambing Ternak', 'populasi' => '25 Ekor'],
            ['hewan' => 'Sapi Potong', 'populasi' => '20 Ekor'],
            ['hewan' => 'Burung Ternak', 'populasi' => '17 Ekor']
        ];

        return view('statistik.index', compact('stats', 'dusunData', 'pekerjaanData', 'lahanData', 'pendidikanData', 'peternakanData'));
    }
}