@extends('layouts.app')

@section('title', 'Transparansi APBDes')
@section('meta_desc', 'Laporan transparansi Anggaran Pendapatan dan Belanja Desa (APBDes) Tanjung Mas Tahun Anggaran terkini.')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <span>Transparansi APBDes</span>
        </div>
        <h1 class="page-title">Transparansi Anggaran Pendapatan &amp; Belanja Desa</h1>
        <p class="page-desc">
            Bentuk pertanggungjawaban dan komitmen Pemerintah Desa Tanjung Mas terhadap keterbukaan informasi pengelolaan Dana Desa, ADD Kabupaten Kampar, dan Bantuan Provinsi.
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="apbdes-card">
            <h2 style="font-size:1.4rem; margin-bottom:1.5rem; color:var(--text-heading);">Realisasi Anggaran Pendapatan Desa</h2>
            
            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Dana Desa (APBN)</span>
                    <span style="color:var(--brand-primary);">Rp 780.000.000 (85%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 85%;"></div>
                </div>
            </div>

            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Alokasi Dana Desa (ADD Pemkab Kampar)</span>
                    <span style="color:var(--brand-primary);">Rp 350.000.000 (90%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 90%;"></div>
                </div>
            </div>

            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Bantuan Keuangan Khusus Provinsi Riau (BKK)</span>
                    <span style="color:var(--brand-primary);">Rp 150.000.000 (100%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 100%;"></div>
                </div>
            </div>

            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Pendapatan Asli Desa (PADes) &amp; Bagi Hasil</span>
                    <span style="color:var(--brand-primary);">Rp 45.000.000 (75%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 75%;"></div>
                </div>
            </div>
        </div>

        <div class="apbdes-card">
            <h2 style="font-size:1.4rem; margin-bottom:1.5rem; color:var(--text-heading);">Rencana Alokasi Belanja &amp; Pembangunan</h2>
            
            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Bidang Pembangunan Desa &amp; Infrastruktur Perkebunan</span>
                    <span style="color:var(--brand-accent);">Rp 520.000.000 (80%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 80%; background: linear-gradient(90deg, #d97706, #f59e0b);"></div>
                </div>
            </div>

            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Bidang Penyelenggaraan Pemerintahan Desa</span>
                    <span style="color:var(--brand-accent);">Rp 380.000.000 (92%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 92%; background: linear-gradient(90deg, #d97706, #f59e0b);"></div>
                </div>
            </div>

            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Bidang Pembinaan &amp; Pemberdayaan Masyarakat (Pertanian/UMKM)</span>
                    <span style="color:var(--brand-accent);">Rp 220.000.000 (70%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 70%; background: linear-gradient(90deg, #d97706, #f59e0b);"></div>
                </div>
            </div>

            <div class="bar-wrap">
                <div class="bar-label-group">
                    <span>Bidang Penanggulangan Bencana &amp; Keadaan Darurat</span>
                    <span style="color:var(--brand-accent);">Rp 65.000.000 (60%)</span>
                </div>
                <div class="bar-track">
                    <div class="bar-fill" style="width: 60%; background: linear-gradient(90deg, #d97706, #f59e0b);"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection