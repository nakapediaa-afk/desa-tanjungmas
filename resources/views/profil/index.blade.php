@extends('layouts.app')

@section('title', 'Profil & Kelembagaan Desa')
@section('meta_desc', 'Profil resmi Desa Tanjung Mas 2025: Sejarah dari Kampung Lengung, Visi Misi Kades Buharis, Batas Wilayah, SOTK Aparatur, dan BPD.')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <span>Profil Desa</span>
        </div>
        <h1 class="page-title">Profil Resmi Desa Tanjung Mas</h1>
        <p class="page-desc">
            Dokumen Profil Pemerintahan Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar, Provinsi Riau.
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        <!-- Visi & Misi Resmi 2025 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2rem; margin-bottom:3.5rem;">
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm); border-top:4px solid var(--brand-primary);">
                <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1rem;">
                    <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-primary-light); color:var(--brand-primary); display:grid; place-items:center;">
                        <i data-lucide="compass" style="width:20px; height:20px;"></i>
                    </div>
                    <h2 style="font-size:1.4rem; color:var(--text-heading);">Visi Desa</h2>
                </div>
                <blockquote style="font-family:var(--font-serif); font-size:1.15rem; font-style:italic; line-height:1.6; color:var(--text-heading); margin-bottom:1rem;">
                    &ldquo;Terwujudnya Desa Tanjung Mas yang maju, mandiri, sejahtera, dan berdaya saing melalui tata kelola pemerintahan yang baik dan partisipatif.&rdquo;
                </blockquote>
                <p style="font-size:0.88rem; color:var(--text-muted); line-height:1.6;">
                    Komitmen kepemimpinan Kepala Desa <strong>BUHARIS</strong> dan jajaran dalam meningkatkan pelayanan publik, memperkuat ekonomi sawit &amp; karet, dan menjaga keharmonisan warga.
                </p>
            </div>

            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm); border-top:4px solid var(--brand-accent);">
                <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1rem;">
                    <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-accent-light); color:var(--brand-accent); display:grid; place-items:center;">
                        <i data-lucide="target" style="width:20px; height:20px;"></i>
                    </div>
                    <h2 style="font-size:1.4rem; color:var(--text-heading);">Misi Pembangunan</h2>
                </div>
                <ul style="padding-left:1.25rem; font-size:0.9rem; color:var(--text-main); line-height:1.75; display:flex; flex-direction:column; gap:0.4rem;">
                    <li>Meningkatkan kualitas pelayanan publik yang transparan, cepat, dan akuntabel.</li>
                    <li>Mendorong pertumbuhan ekonomi masyarakat melalui pengembangan sektor pertanian, perkebunan, dan usaha kecil.</li>
                    <li>Meningkatkan kualitas sumber daya manusia melalui bidang pendidikan, kesehatan, dan pelatihan keterampilan.</li>
                    <li>Mewujudkan tata kelola pemerintahan desa yang bersih, partisipatif, dan responsif terhadap aspirasi masyarakat.</li>
                    <li>Menjaga stabilitas sosial dan keamanan lingkungan melalui penguatan nilai-nilai musyawarah dan gotong royong.</li>
                </ul>
            </div>
        </div>

        <!-- Sejarah Lengkap Asal Usul Lengung -->
        <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2.5rem; box-shadow:var(--shadow-sm); margin-bottom:3.5rem;">
            <span class="badge badge-primary" style="margin-bottom:0.75rem;">Sejarah &amp; Asal Usul</span>
            <h2 style="font-size:1.75rem; margin-bottom:1rem; color:var(--text-heading);">Dari Kampung Tua Lengung Hingga Pemekaran Desa (2008)</h2>
            <p style="font-size:0.95rem; color:var(--text-muted); line-height:1.8; margin-bottom:1rem;">
                Desa Tanjung Mas terbentuk akibat perkampungan penduduk yang membuka lahan untuk pertanian dan perkebunan. Sebagian besar penduduknya berasal dari kampung tua bernama <strong>Lengung</strong> (pecahan dari Desa Teluk Paman). Karena kampung tua Lengung sering dilanda banjir tahunan, sekitar tahun <strong>1980</strong> penduduk bermufakat pindah ke pemukiman baru di wilayah hutan belantara yang kini menjadi Tanjung Mas dan Tanjung Harapan.
            </p>
            <p style="font-size:0.95rem; color:var(--text-muted); line-height:1.8; margin-bottom:1.5rem;">
                Pada tahun 1984, Tanjung Mas terdiri dari 35 KK (135 jiwa). Berkembang menjadi 120 KK (425 jiwa) pada tahun 2000, dan 154 KK (510 jiwa) pada tahun 2002. Puncaknya pada tahun <strong>2008</strong>, Tanjung Mas resmi berdiri sebagai desa pemekaran mandiri dari Desa Tanjung Harapan.
            </p>

            <h3 style="font-size:1.15rem; margin-bottom:1rem; color:var(--text-heading);">Kronologi Kepemimpinan Kepala Desa (2008 &ndash; 2027)</h3>
            <div style="display:flex; flex-direction:column; gap:0.75rem;">
                @foreach($sejarahKronologi as $s)
                <div style="display:grid; grid-template-columns:140px 1fr; gap:1rem; padding:0.75rem; background:var(--bg-subtle); border-radius:var(--radius-md); font-size:0.88rem;">
                    <strong style="color:var(--brand-primary);">{{ $s['tahun'] }}</strong>
                    <span style="color:var(--text-main);">{{ $s['peristiwa'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Letak Geografis, Batas & Orbitasi -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2rem; margin-bottom:3.5rem;">
            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1.25rem;">
                    <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-primary-light); color:var(--brand-primary); display:grid; place-items:center;">
                        <i data-lucide="map" style="width:20px; height:20px;"></i>
                    </div>
                    <h3 style="font-size:1.3rem; color:var(--text-heading);">Batas-Batas Wilayah</h3>
                </div>
                <div style="display:flex; flex-direction:column; gap:0.85rem; font-size:0.9rem;">
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <strong>Sebelah Utara:</strong>
                        <span>Desa Sei Rambai / Desa Tanjung Harapan</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <strong>Sebelah Selatan:</strong>
                        <span>Desa Kuntu</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <strong>Sebelah Barat:</strong>
                        <span>Desa Sungai Raja / Desa Sungai Rambai</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding-bottom:0.5rem;">
                        <strong>Sebelah Timur:</strong>
                        <span>Desa Tanjung Harapan / Teluk Paman</span>
                    </div>
                </div>
            </div>

            <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm);">
                <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1.25rem;">
                    <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-accent-light); color:var(--brand-accent); display:grid; place-items:center;">
                        <i data-lucide="navigation" style="width:20px; height:20px;"></i>
                    </div>
                    <h3 style="font-size:1.3rem; color:var(--text-heading);">Luas Wilayah &amp; Orbitasi</h3>
                </div>
                <div style="display:flex; flex-direction:column; gap:0.85rem; font-size:0.9rem;">
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <span>Luas Total Wilayah:</span>
                        <strong style="color:var(--brand-primary);">150 km&sup2; (&plusmn; 15.000 Ha)</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <span>Kawasan Pemukiman:</span>
                        <strong>72 Hektar</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <span>Kawasan Hutan Tanaman Industri (HTI):</span>
                        <strong>750 Hektar</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <span>Jarak ke Ibukota Kecamatan (Lipat Kain):</span>
                        <strong>13 Km (Jalan Tanah / Poros)</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding-bottom:0.5rem;">
                        <span>Jarak ke Ibukota Kabupaten (Bangkinang):</span>
                        <strong>100 Km (&plusmn; 3 Jam Perjalanan)</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- SOTK Aparatur Pemerintah Desa (Data Asli 2025) -->
        <div style="margin-bottom:3.5rem;">
            <div class="section-header">
                <div>
                    <h2 class="section-title">Struktur Organisasi Pemerintah Desa (SOTK)</h2>
                    <p class="section-subtitle">Aparatur Pemerintah Desa Tanjung Mas Masa Bakti 2025 &ndash; 2027.</p>
                </div>
            </div>

            <div class="staff-grid">
                @foreach($perangkat as $p)
                <div class="staff-card">
                    <img src="{{ $p->foto }}" alt="{{ $p->nama }}" class="staff-photo">
                    <div class="staff-name">{{ $p->nama }}</div>
                    <div class="staff-role">{{ $p->jabatan }}</div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Badan Permusyawaratan Desa (BPD) -->
        <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2rem; box-shadow:var(--shadow-sm); margin-bottom:3.5rem;">
            <div style="display:flex; align-items:center; gap:0.5rem; margin-bottom:1.5rem;">
                <div style="width:36px; height:36px; border-radius:var(--radius-md); background:var(--brand-primary-light); color:var(--brand-primary); display:grid; place-items:center;">
                    <i data-lucide="scale" style="width:20px; height:20px;"></i>
                </div>
                <h3 style="font-size:1.35rem; color:var(--text-heading);">Badan Permusyawaratan Desa (BPD) Tanjung Mas</h3>
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:2rem;">
                <div style="background:var(--bg-subtle); border-radius:var(--radius-md); padding:1.5rem;">
                    <div style="font-size:0.8rem; color:var(--text-muted); text-transform:uppercase; font-weight:700;">Pimpinan BPD</div>
                    <div style="margin-top:0.5rem;">
                        <div style="font-size:1.1rem; font-weight:700; color:var(--brand-primary);">{{ $bpd['ketua'] }}</div>
                        <div style="font-size:0.85rem; color:var(--text-muted);">Ketua BPD</div>
                    </div>
                    <div style="margin-top:1rem;">
                        <div style="font-size:1rem; font-weight:700; color:var(--text-heading);">{{ $bpd['wakil'] }}</div>
                        <div style="font-size:0.85rem; color:var(--text-muted);">Wakil Ketua BPD</div>
                    </div>
                </div>

                <div style="background:var(--bg-subtle); border-radius:var(--radius-md); padding:1.5rem;">
                    <div style="font-size:0.8rem; color:var(--text-muted); text-transform:uppercase; font-weight:700; margin-bottom:0.75rem;">Anggota BPD (5 Orang)</div>
                    <ul style="padding-left:1.25rem; font-size:0.9rem; color:var(--text-main); display:flex; flex-direction:column; gap:0.4rem;">
                        @foreach($bpd['anggota'] as $a)
                        <li>{{ $a }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Lembaga Kemasyarakatan -->
        <div>
            <div class="section-header" style="margin-bottom:1.5rem;">
                <div>
                    <h2 class="section-title">Lembaga Kemasyarakatan Desa</h2>
                    <p class="section-subtitle">Organisasi dan kelompok kemasyarakatan aktif di Desa Tanjung Mas.</p>
                </div>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(320px, 1fr)); gap:1.5rem;">
                @foreach($lembagaKemasyarakatan as $lk)
                <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.5rem; box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between;">
                    <div>
                        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem;">
                            <div style="width:38px; height:38px; border-radius:var(--radius-md); background:var(--brand-primary-light); color:var(--brand-primary); display:grid; place-items:center; flex-shrink:0;">
                                <i data-lucide="{{ $lk['icon'] }}" style="width:18px; height:18px;"></i>
                            </div>
                            <h3 style="font-size:1.05rem; line-height:1.3; color:var(--text-heading);">{{ $lk['nama'] }}</h3>
                        </div>
                        <p style="font-size:0.86rem; color:var(--text-muted); line-height:1.6; margin-bottom:1rem;">
                            {{ $lk['deskripsi'] }}
                        </p>
                    </div>
                    <div style="border-top:1px solid var(--border-subtle); padding-top:0.75rem; font-size:0.82rem; color:var(--brand-primary); font-weight:700;">
                        Jumlah: <span style="color:var(--text-heading); font-weight:600;">{{ $lk['anggota'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection