@extends('layouts.app')

@section('title', 'Statistik Kependudukan 2025')
@section('meta_desc', 'Data resmi kependudukan Desa Tanjung Mas 2025: 1.155 jiwa, 259 KK, 4 dusun, luas lahan sawit & karet, mata pencaharian, dan pendidikan.')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <span>Statistik Kependudukan</span>
        </div>
        <h1 class="page-title">Statistik &amp; Demografi Resmi Desa (Tahun 2025)</h1>
        <p class="page-desc">
            Transparansi data demografi (*Open Data*) resmi Desa Tanjung Mas berdasarkan Dokumen Profil Desa 2025.
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        <!-- 4 Metrik Utama -->
        <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:1.25rem; margin-bottom:3rem;">
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.5rem; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--brand-primary);">
                <div style="font-family:var(--font-serif); font-size:2.25rem; font-weight:700; color:var(--text-heading); margin-bottom:0.25rem;">
                    1.155
                </div>
                <div style="font-size:0.82rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">Total Penduduk (Jiwa)</div>
            </div>

            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.5rem; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid #0284c7;">
                <div style="font-family:var(--font-serif); font-size:2.25rem; font-weight:700; color:#0284c7; margin-bottom:0.25rem;">
                    259
                </div>
                <div style="font-size:0.82rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">Kepala Keluarga (KK)</div>
            </div>

            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.5rem; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--brand-primary);">
                <div style="font-family:var(--font-serif); font-size:2.25rem; font-weight:700; color:var(--brand-primary); margin-bottom:0.25rem;">
                    574 <span style="font-size:1.1rem; color:var(--text-muted); font-weight:500;">/ 581</span>
                </div>
                <div style="font-size:0.82rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">Laki-laki / Perempuan</div>
            </div>

            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.5rem; text-align:center; box-shadow:var(--shadow-sm); border-top:3px solid var(--brand-accent);">
                <div style="font-family:var(--font-serif); font-size:2.25rem; font-weight:700; color:var(--brand-accent); margin-bottom:0.25rem;">
                    150 km&sup2;
                </div>
                <div style="font-size:0.82rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">4 Dusun &bull; 8 RW &bull; 16 RT</div>
            </div>
        </div>

        <!-- Sebaran 4 Dusun & Lahan Pertanian -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2.5rem; margin-bottom:3.5rem;">
            <!-- Dusun -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1.5rem;">
                    <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-primary-light); color:var(--brand-primary); display:grid; place-items:center;">
                        <i data-lucide="map-pin" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <h2 style="font-size:1.3rem; color:var(--text-heading);">Pembagian 4 Wilayah Dusun</h2>
                        <div style="font-size:0.82rem; color:var(--text-muted);">Total 8 RW dan 16 RT</div>
                    </div>
                </div>

                <div style="display:flex; flex-direction:column; gap:1rem;">
                    @foreach($dusunData as $d)
                    <div style="background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); padding:1rem;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.25rem;">
                            <span style="font-weight:700; font-size:0.95rem; color:var(--text-heading);">{{ $d['nama'] }}</span>
                            <span class="badge badge-primary">{{ $d['rw'] }} RW &bull; {{ $d['rt'] }} RT</span>
                        </div>
                        <div style="font-size:0.82rem; color:var(--text-muted);">
                            Kepala Dusun: <strong style="color:var(--brand-primary);">{{ $d['kadus'] }}</strong>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Lahan Perkebunan -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1.5rem;">
                    <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-accent-light); color:var(--brand-accent); display:grid; place-items:center;">
                        <i data-lucide="trees" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <h2 style="font-size:1.3rem; color:var(--text-heading);">Potensi Lahan Perkebunan &amp; Tani</h2>
                        <div style="font-size:0.82rem; color:var(--text-muted);">Didominasi Kelapa Sawit &amp; Karet Alam</div>
                    </div>
                </div>

                <div style="display:flex; flex-direction:column; gap:1.1rem;">
                    @foreach($lahanData as $l)
                    <div>
                        <div style="display:flex; justify-content:space-between; font-size:0.88rem; font-weight:600; margin-bottom:0.3rem;">
                            <span>{{ $l['komoditas'] }}</span>
                            <span style="color:var(--brand-primary); font-weight:700;">{{ $l['luas'] }}</span>
                        </div>
                        <div style="height:8px; background:var(--clr-ink-100); border-radius:var(--radius-full); overflow:hidden;">
                            <div style="height:100%; width:{{ $l['persen'] }}%; background:linear-gradient(90deg, var(--clr-forest-700), var(--clr-forest-500)); border-radius:var(--radius-full);"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Mata Pencaharian & Pendidikan -->
        <div style="display:grid; grid-template-columns:1.1fr 0.9fr; gap:2.5rem; margin-bottom:3.5rem;">
            <!-- Pekerjaan -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <h3 style="font-size:1.25rem; margin-bottom:1.25rem; color:var(--text-heading); display:flex; align-items:center; gap:0.5rem;">
                    <i data-lucide="briefcase" style="width:18px; height:18px; color:var(--brand-primary);"></i> Struktur Mata Pencaharian Warga
                </h3>
                <div style="display:flex; flex-direction:column; gap:0.85rem;">
                    @foreach($pekerjaanData as $p)
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:0.6rem 0.85rem; background:var(--bg-subtle); border-radius:var(--radius-md); font-size:0.88rem;">
                        <span style="display:flex; align-items:center; gap:0.5rem; font-weight:600;">
                            <i data-lucide="{{ $p['icon'] }}" style="width:15px; height:15px; color:var(--brand-primary);"></i>
                            {{ $p['pekerjaan'] }}
                        </span>
                        <strong style="color:var(--brand-primary);">{{ $p['jumlah'] }} Orang</strong>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Pendidikan -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <h3 style="font-size:1.25rem; margin-bottom:1.25rem; color:var(--text-heading); display:flex; align-items:center; gap:0.5rem;">
                    <i data-lucide="graduation-cap" style="width:18px; height:18px; color:var(--brand-accent);"></i> Data Pendidikan Masyarakat
                </h3>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem;">
                    @foreach($pendidikanData as $pend)
                    <div style="padding:0.75rem; background:var(--bg-subtle); border-radius:var(--radius-md); font-size:0.85rem;">
                        <div style="color:var(--text-muted);">{{ $pend['tingkat'] }}</div>
                        <div style="font-weight:700; font-size:1.1rem; color:var(--brand-accent); margin-top:0.2rem;">{{ $pend['jumlah'] }} Orang</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Peternakan & Keagamaan Grid -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2.5rem;">
            <!-- Peternakan -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <h3 style="font-size:1.2rem; margin-bottom:1.25rem; color:var(--text-heading);">
                    Populasi Ternak Warga
                </h3>
                <div style="display:flex; flex-direction:column; gap:0.65rem;">
                    @foreach($peternakanData as $pt)
                    <div style="display:flex; justify-content:space-between; font-size:0.88rem; border-bottom:1px dashed var(--border-subtle); padding-bottom:0.4rem;">
                        <span>{{ $pt['hewan'] }}</span>
                        <strong style="color:var(--brand-primary);">{{ $pt['populasi'] }}</strong>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Keagamaan -->
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <h3 style="font-size:1.2rem; margin-bottom:1.25rem; color:var(--text-heading);">
                    Data Pemeluk Agama &amp; Rumah Ibadah
                </h3>
                <div style="display:flex; flex-direction:column; gap:0.75rem; font-size:0.88rem;">
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.4rem;">
                        <span>Pemeluk Agama Islam:</span>
                        <strong style="color:var(--brand-primary);">1.109 Orang (95,7%)</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.4rem;">
                        <span>Pemeluk Agama Kristen:</span>
                        <strong>50 Orang (4,3%)</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.4rem;">
                        <span>Jumlah Masjid:</span>
                        <strong>1 Buah (Masjid Al-Ikhlas)</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding-bottom:0.4rem;">
                        <span>Jumlah Musholla:</span>
                        <strong>2 Buah</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection