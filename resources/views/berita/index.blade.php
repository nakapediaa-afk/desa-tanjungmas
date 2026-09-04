@extends('layouts.app')

@section('title', 'Warta & Kabar Desa')
@section('meta_desc', 'Berita dan pengumuman resmi dari Pemerintah Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar.')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <span>Warta Desa</span>
        </div>
        <h1 class="page-title">Warta &amp; Kabar Desa Tanjung Mas</h1>
        <p class="page-desc">
            Informasi berkala seputar agenda kemasyarakatan, pengumuman pemerintah desa, dan perkembangan pembangunan infrastruktur.
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        @if($berita->count() > 0)
        <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(320px, 1fr)); gap:2rem;">
            @foreach($berita as $b)
            <article class="featured-card">
                <div class="featured-img-wrap">
                    <img src="{{ $b->gambar }}" alt="{{ $b->judul }}">
                </div>
                <div class="featured-body">
                    <div>
                        <div class="news-meta">
                            <span class="badge badge-primary">{{ $b->kategori }}</span>
                            <span>&bull;</span>
                            <span>{{ $b->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="news-headline" style="font-size:1.2rem;">
                            <a href="{{ route('berita.show', $b->slug) }}">{{ $b->judul }}</a>
                        </h3>
                        <p class="news-excerpt">{{ Str::limit($b->ringkasan, 120) }}</p>
                    </div>
                    <div style="margin-top:1rem;">
                        <a href="{{ route('berita.show', $b->slug) }}" class="btn btn-outline btn-sm" style="color:var(--brand-primary); border-color:var(--brand-primary);">
                            Baca Selengkapnya &rarr;
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div style="margin-top:2.5rem;">
            {{ $berita->links() }}
        </div>
        @endif
    </div>
</section>
@endsection