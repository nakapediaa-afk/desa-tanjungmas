@extends('layouts.app')

@section('title', $berita->judul)
@section('meta_desc', Str::limit($berita->ringkasan, 160))

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <a href="{{ route('berita.index') }}">Warta Desa</a>
            <span>/</span>
            <span>Detail Berita</span>
        </div>
        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem;">
            <span class="badge badge-primary">{{ $berita->kategori }}</span>
            <span style="font-size:0.85rem; color:var(--text-muted);">&bull; {{ $berita->created_at->format('d F Y') }}</span>
            <span style="font-size:0.85rem; color:var(--text-muted);">&bull; Oleh: {{ $berita->penulis }}</span>
        </div>
        <h1 class="page-title" style="font-size:clamp(1.8rem, 3.5vw, 2.5rem);">{{ $berita->judul }}</h1>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width:860px;">
        <img src="{{ $berita->gambar }}" alt="{{ $berita->judul }}" style="width:100%; aspect-ratio:16/9; object-fit:cover; border-radius:var(--radius-lg); margin-bottom:2rem; box-shadow:var(--shadow-md);">
        
        <div style="font-size:1.05rem; line-height:1.8; color:var(--text-main);">
            {!! nl2br(e($berita->isi)) !!}
        </div>

        <div style="margin-top:3rem; padding-top:1.5rem; border-top:1px solid var(--border-subtle); display:flex; justify-content:space-between; align-items:center;">
            <a href="{{ route('berita.index') }}" class="btn btn-outline btn-sm">
                &larr; Kembali ke Warta Desa
            </a>
            <div style="display:flex; gap:0.5rem;">
                <button onclick="navigator.clipboard.writeText(window.location.href); alert('Tautan berita berhasil disalin!');" class="btn btn-outline btn-sm">
                    <i data-lucide="share-2" style="width:14px; height:14px;"></i> Bagikan Berita
                </button>
            </div>
        </div>
    </div>
</section>
@endsection