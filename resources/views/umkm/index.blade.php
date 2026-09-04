@extends('layouts.app')

@section('title', 'Pasar Sawit & UMKM Desa')
@section('meta_desc', 'Katalog produk unggulan perkebunan kelapa sawit, karet bokar, dan kerajinan UMKM warga Desa Tanjung Mas, Kampar Kiri.')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <span>Pasar Sawit &amp; UMKM</span>
        </div>
        <h1 class="page-title">Potensi Komoditas &amp; Pasar UMKM Warga</h1>
        <p class="page-desc">
            Dukung penguatan ekonomi kerakyatan Desa Tanjung Mas. Temukan bibit kelapa sawit bersertifikasi, getah karet berkualitas, serta olahan ikan khas Kampar.
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        @if($umkm->count() > 0)
        <div class="umkm-grid">
            @foreach($umkm as $u)
            <div class="product-card">
                <img src="{{ $u->foto }}" alt="{{ $u->nama_produk }}" class="product-img">
                <div class="product-body">
                    <span class="badge badge-primary" style="margin-bottom:0.5rem;">{{ $u->kategori }}</span>
                    <h3 class="product-title">{{ $u->nama_produk }}</h3>
                    <p class="product-desc">{{ $u->deskripsi }}</p>
                    <div style="border-top:1px solid var(--border-subtle); padding-top:0.75rem; display:flex; align-items:center; justify-content:space-between;">
                        <span style="font-size:0.8rem; color:var(--text-muted);"><i data-lucide="user" style="width:12px; height:12px; display:inline;"></i> {{ $u->pemilik }}</span>
                        @if($u->kontak)
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $u->kontak) }}" target="_blank" class="btn btn-primary btn-sm">
                            <i data-lucide="phone" style="width:12px; height:12px;"></i> Kontak
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endsection