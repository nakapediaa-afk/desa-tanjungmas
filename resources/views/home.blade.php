@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="hero-editorial">
    <div class="container hero-grid">
        <div class="hero-content">
            <div class="hero-eyebrow">Pemerintah Kabupaten Kampar</div>
            <h1 class="hero-title">
                Membangun Desa <span>Tanjung Mas</span> yang Mandiri &amp; Transparan
            </h1>
            <p class="hero-desc">
                Pusat informasi publik dan layanan masyarakat Desa Tanjung Mas, Kecamatan Kampar Kiri. Menyajikan transparansi anggaran, kemudahan pengurusan surat, dan promosi potensi perkebunan sawit &amp; karet warga.
            </p>
            <div class="hero-actions">
                <a href="{{ route('layanan.index') }}" class="btn btn-primary">
                    <i data-lucide="file-check-2" style="width:18px; height:18px;"></i> Ajukan Layanan Surat
                </a>
                <a href="{{ route('berita.index') }}" class="btn btn-outline">
                    <i data-lucide="newspaper" style="width:18px; height:18px;"></i> Warta &amp; Kabar Desa
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-frame">
                <img src="https://images.unsplash.com/photo-1588392382834-a891154bca4d?w=800&auto=format&fit=crop&q=80" alt="Bentang Alam Perkebunan Kampar Kiri" loading="lazy" decoding="async">
            </div>
            <div class="hero-badge-card">
                <div style="width:40px; height:40px; border-radius:50%; background:var(--brand-primary-light); color:var(--brand-primary); display:grid; place-items:center;">
                    <i data-lucide="trees" style="width:20px; height:20px;"></i>
                </div>
                <div>
                    <div style="font-weight:700; font-size:0.9rem; color:var(--text-heading);">Sentra Perkebunan Kampar Kiri</div>
                    <div style="font-size:0.75rem; color:var(--text-muted);">Sawit, Karet &amp; Perikanan Sungai</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4 Quick Access Bento Grid -->
<section class="bento-section">
    <div class="container">
        <div class="bento-grid">
            <a href="{{ route('layanan.index') }}" class="bento-card">
                <div>
                    <div class="bento-icon" style="background:var(--brand-primary-light); color:var(--brand-primary);"><i data-lucide="file-check-2" style="width:24px; height:24px;"></i></div>
                    <h3 class="bento-title">Layanan Surat</h3>
                    <p class="bento-desc">Persyaratan dan permohonan SKU Usaha/Kebun, SKTM, Pengantar SKCK, &amp; Domisili.</p>
                </div>
                <div class="bento-cta" style="color:var(--brand-primary);">Lihat Persyaratan &rarr;</div>
            </a>

            <a href="{{ route('berita.index') }}" class="bento-card">
                <div>
                    <div class="bento-icon" style="background:var(--brand-blue-light); color:var(--brand-blue);"><i data-lucide="newspaper" style="width:24px; height:24px;"></i></div>
                    <h3 class="bento-title">Warta Desa</h3>
                    <p class="bento-desc">Pengumuman resmi, musyawarah pembangunan desa, dan agenda kemasyarakatan.</p>
                </div>
                <div class="bento-cta" style="color:var(--brand-blue);">Baca Kabar Terkini &rarr;</div>
            </a>

            <a href="{{ route('apbdes.index') }}" class="bento-card">
                <div>
                    <div class="bento-icon" style="background:var(--brand-accent-light); color:var(--brand-accent);"><i data-lucide="pie-chart" style="width:24px; height:24px;"></i></div>
                    <h3 class="bento-title">Transparansi Dana</h3>
                    <p class="bento-desc">Realisasi terbuka Dana Desa (DD), ADD Kampar, dan Bantuan Keuangan Provinsi.</p>
                </div>
                <div class="bento-cta" style="color:var(--brand-accent);">Lihat Anggaran &rarr;</div>
            </a>

            <a href="{{ route('umkm.index') }}" class="bento-card">
                <div>
                    <div class="bento-icon" style="background:var(--brand-primary-light); color:var(--brand-primary);"><i data-lucide="store" style="width:24px; height:24px;"></i></div>
                    <h3 class="bento-title">Pasar UMKM</h3>
                    <p class="bento-desc">Katalog bibit sawit unggul, karet bokar rakyat, dan olahan ikan salai Kampar.</p>
                </div>
                <div class="bento-cta" style="color:var(--brand-primary);">Jelajahi Produk &rarr;</div>
            </a>
        </div>
    </div>
</section>

<!-- Data Demografi Singkat -->
<div class="stat-strip">
    <div class="container">
        <div class="stat-grid">
            <div class="stat-box">
                <div class="stat-number">{{ number_format($stats->total_penduduk ?? 1155) }}</div>
                <div class="stat-label">Jiwa Penduduk</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">{{ number_format($stats->kepala_keluarga ?? 259) }}</div>
                <div class="stat-label">Kepala Keluarga (KK)</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">&plusmn; 150 km&sup2; (15.000 Ha)</div>
                <div class="stat-label">Luas Wilayah Desa</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">{{ $stats->dusun ?? 4 }} Dusun</div>
                <div class="stat-label">Tanjung Mas &bull; Pasir Putih &bull; Setingkai &bull; Napal</div>
            </div>
        </div>
    </div>
</div>

<!-- Warta Terkini -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div>
                <h2 class="section-title">Warta &amp; Informasi Terkini</h2>
                <p class="section-subtitle">Berita resmi seputar program kerja, pembangunan, dan kegiatan sosial warga.</p>
            </div>
            <a href="{{ route('berita.index') }}" class="btn btn-outline btn-sm">
                Lihat Seluruh Berita &rarr;
            </a>
        </div>

        @if($berita->count() > 0)
        <div class="news-layout">
            @php $featured = $berita->first(); @endphp
            <article class="featured-card">
                <div class="featured-img-wrap">
                    <img src="{{ $featured->gambar }}" alt="{{ $featured->judul }}" loading="lazy" decoding="async">
                </div>
                <div class="featured-body">
                    <div>
                        <div class="news-meta">
                            <span class="badge badge-primary">{{ $featured->kategori }}</span>
                            <span>&bull;</span>
                            <span>{{ $featured->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="news-headline">
                            <a href="{{ route('berita.show', $featured->slug) }}">{{ $featured->judul }}</a>
                        </h3>
                        <p class="news-excerpt">{{ Str::limit($featured->ringkasan, 140) }}</p>
                    </div>
                    <div style="margin-top:1.25rem;">
                        <a href="{{ route('berita.show', $featured->slug) }}" class="btn-read-more">
                            Baca Selengkapnya &rarr;
                        </a>
                    </div>
                </div>
            </article>

            <div class="news-stream">
                @foreach($berita->skip(1) as $item)
                <article class="stream-item">
                    <img src="{{ $item->gambar }}" alt="{{ $item->judul }}" class="stream-thumb" loading="lazy" decoding="async">
                    <div>
                        <div style="font-size:0.75rem; color:var(--text-muted); margin-bottom:0.2rem;">
                            <span class="badge badge-neutral" style="font-size:0.7rem;">{{ $item->kategori }}</span>
                            &bull; {{ $item->created_at->format('d M Y') }}
                        </div>
                        <h4 class="stream-title">
                            <a href="{{ route('berita.show', $item->slug) }}">{{ $item->judul }}</a>
                        </h4>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Perangkat Desa -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header" style="justify-content:center; text-align:center;">
            <div>
                <h2 class="section-title">Aparatur Pemerintah Desa</h2>
                <p class="section-subtitle">Pelayan masyarakat Desa Tanjung Mas yang berdedikasi dan siap melayani kebutuhan warga.</p>
            </div>
        </div>

        <div class="staff-grid">
            @foreach($perangkat as $p)
            <div class="staff-card">
                <img src="{{ $p->foto }}" alt="{{ $p->nama }}" class="staff-photo" loading="lazy" decoding="async">
                <div class="staff-name">{{ $p->nama }}</div>
                <div class="staff-role">{{ $p->jabatan }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
