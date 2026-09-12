@extends('layouts.app')

@section('title', 'Profil Desa & Peta Wilayah')
@section('meta_description', 'Profil Lengkap, Visi Misi, Sejarah, Peta Wilayah Interaktif 4 Dusun, SOTK Perangkat Desa, dan Lembaga Kemasyarakatan Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar, Riau.')

@push('styles')
<!-- Leaflet CSS for Interactive WebGIS Map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
@endpush

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <span>Profil &amp; Peta Desa</span>
        </div>
        <h1 class="page-title">Profil &amp; Wilayah Geografis Desa</h1>
        <p class="page-subtitle">Mengenal sejarah, kepemimpinan, batas teritorial resmi Google Maps, dan peta sebaran 4 dusun Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar, Riau.</p>
    </div>
</div>

<section class="section" style="padding-top:2.5rem;">
    <div class="container">
        <!-- Visi & Misi -->
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

        <!-- PETA INTERAKTIF WILAYAH DESA TANJUNG MAS (TERHUBUNG GOOGLE MAPS ASLI) -->
        <div id="peta-desa" class="map-card-wrapper">
            <div class="map-header-bar">
                <div class="map-header-info">
                    <h2>
                        <i data-lucide="map-pin" style="width:22px; height:22px; color:var(--brand-primary);"></i>
                        Peta Wilayah &amp; Sebaran 4 Dusun Desa Tanjung Mas
                    </h2>
                    <p>Kecamatan Kampar Kiri, Kabupaten Kampar, Riau &bull; Koordinat Google Maps: -0.0045758, 101.0994667</p>
                </div>
                <div class="map-actions">
                    <a href="https://www.google.com/maps/place/Tj.+Mas,+Kec.+Kampar+Kiri,+Kabupaten+Kampar,+Riau/@-0.0045758,101.0994667,13z/data=!4m6!3m5!1s0x2e2a9d929ca3fc89:0xed39cf77bae641c9!8m2!3d-0.0045758!4d101.0994667" target="_blank" rel="noopener noreferrer" class="map-btn-gmaps" title="Buka Titik Resmi Google Maps">
                        <i data-lucide="external-link" style="width:15px; height:15px;"></i> Buka di Google Maps
                    </a>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=-0.0045758,101.0994667" target="_blank" rel="noopener noreferrer" class="map-btn-dir" title="Navigasi Rute Langsung ke Balai Desa">
                        <i data-lucide="navigation" style="width:15px; height:15px;"></i> Petunjuk Arah (GPS)
                    </a>
                </div>
            </div>

            <!-- Toolbar Kontrol Layer -->
            <div class="map-toolbar">
                <div class="map-layers-group">
                    <span style="font-weight:700; color:var(--text-heading); margin-right:0.35rem;">Pilihan Tampilan:</span>
                    <button type="button" id="layerStandardBtn" class="map-layer-btn active" onclick="switchMapLayer('standard')">
                        <i data-lucide="map" style="width:14px; height:14px;"></i> Peta Jalan
                    </button>
                    <button type="button" id="layerDarkBtn" class="map-layer-btn" onclick="switchMapLayer('dark')">
                        <i data-lucide="moon" style="width:14px; height:14px;"></i> Mode Gelap
                    </button>
                    <button type="button" id="layerSatBtn" class="map-layer-btn" onclick="switchMapLayer('satellite')">
                        <i data-lucide="globe" style="width:14px; height:14px;"></i> Foto Satelit
                    </button>
                </div>
                <div>
                    <button type="button" class="map-layer-btn" onclick="resetDesaView()" title="Fokus ke Balai Kantor Desa">
                        <i data-lucide="locate-fixed" style="width:14px; height:14px;"></i> Fokus Desa
                    </button>
                </div>
            </div>

            <!-- Container Peta Leaflet -->
            <div id="desaMap"></div>

            <!-- 4 Dusun Interactive Jump Cards -->
            <div class="map-dusun-grid">
                <div class="map-dusun-card" onclick="focusToMarker('kantor')">
                    <div class="map-dusun-icon" style="background:#ffe4e6; color:#e11d48;">
                        <i data-lucide="landmark" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <div class="map-dusun-title">Kantor &amp; Balai Desa</div>
                        <div class="map-dusun-sub">Pusat Pelayanan &bull; Kades Buharis</div>
                    </div>
                </div>

                <div class="map-dusun-card" onclick="focusToMarker('dusun1')">
                    <div class="map-dusun-icon">
                        <i data-lucide="home" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <div class="map-dusun-title">Dusun I Tanjung Mas</div>
                        <div class="map-dusun-sub">Kadus Ade Candra Irawan &bull; 4 RT</div>
                    </div>
                </div>

                <div class="map-dusun-card" onclick="focusToMarker('dusun2')">
                    <div class="map-dusun-icon">
                        <i data-lucide="trees" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <div class="map-dusun-title">Dusun II Pasir Putih</div>
                        <div class="map-dusun-sub">Kadus Sariyal &bull; Kebun Karet 225 Ha</div>
                    </div>
                </div>

                <div class="map-dusun-card" onclick="focusToMarker('dusun3')">
                    <div class="map-dusun-icon" style="background:#fef3c7; color:#d97706;">
                        <i data-lucide="palmtree" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <div class="map-dusun-title">Dusun III Sungai Setingkai</div>
                        <div class="map-dusun-sub">Kadus Wahyudi &bull; Kebun Sawit 500 Ha</div>
                    </div>
                </div>

                <div class="map-dusun-card" onclick="focusToMarker('dusun4')">
                    <div class="map-dusun-icon" style="background:#e0f2fe; color:#0284c7;">
                        <i data-lucide="fish" style="width:20px; height:20px;"></i>
                    </div>
                    <div>
                        <div class="map-dusun-title">Dusun IV Sungai Napal</div>
                        <div class="map-dusun-sub">Kadus Gustin Harahap &bull; Aliran Kampar</div>
                    </div>
                </div>
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
                        <span>Desa Kuntu &amp; Lubukbukit</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; border-bottom:1px solid var(--border-subtle); padding-bottom:0.5rem;">
                        <strong>Sebelah Barat:</strong>
                        <span>Desa Sungai Raja / Desa Sungai Rambai</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding-bottom:0.5rem;">
                        <strong>Sebelah Timur:</strong>
                        <span>Desa Tanjung Harapan / Teluk Paman (Lipat Kain)</span>
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
                        <strong>13 Km (Jalan Poros)</strong>
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

@push('scripts')
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    var map;
    var currentTileLayer;
    var currentLayerType = 'standard';
    var markers = {};

    // Base Tile Layers
    var tileLayers = {
        standard: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a> contributors'
        }),
        dark: L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
            attribution: '&copy; CartoDB &copy; OpenStreetMap'
        }),
        satellite: L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 19,
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        })
    };

    function createCustomPin(iconHtml, pinClass) {
        return L.divIcon({
            html: '<div class="custom-map-pin ' + pinClass + '" style="width:34px; height:34px; font-size:16px;">' + iconHtml + '</div>',
            className: 'custom-pin-wrapper',
            iconSize: [34, 34],
            iconAnchor: [17, 17],
            popupAnchor: [0, -18]
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Koordinat Resmi Google Maps Desa Tanjung Mas (-0.0045758, 101.0994667)
        var desaCenter = [-0.0045758, 101.0994667];
        
        map = L.map('desaMap', {
            center: desaCenter,
            zoom: 13,
            scrollWheelZoom: false
        });

        // Determine initial theme
        var isDark = document.documentElement.getAttribute('data-theme') === 'dark';
        currentLayerType = isDark ? 'dark' : 'standard';
        currentTileLayer = tileLayers[currentLayerType].addTo(map);
        updateLayerButtons(currentLayerType);

        // Poligon Garis Batas Teritorial Sesuai Google Maps (Bentuk Diagonal Tj. Mas)
        var boundaryCoords = [
            [0.0320, 101.0660],
            [-0.0380, 101.1440],
            [-0.0460, 101.1480],
            [-0.0680, 101.1280],
            [0.0080, 101.0490],
            [0.0180, 101.0430]
        ];

        var territoryPolygon = L.polygon(boundaryCoords, {
            color: '#e11d48',
            weight: 2.5,
            dashArray: '6, 8',
            fillColor: '#22c55e',
            fillOpacity: 0.08
        }).addTo(map);
        territoryPolygon.bindTooltip('Batas Wilayah Administratif Desa Tanjung Mas, Kec. Kampar Kiri (Sesuai Google Maps)', {
            sticky: true,
            direction: 'top'
        });

        // 1. Kantor & Balai Desa Tanjung Mas (Pusat Koordinat Google Maps)
        var popupKantor = '<div class="map-popup-card">' +
            '<span class="map-popup-badge" style="background:#ffe4e6; color:#e11d48;">Pusat Pemerintahan</span>' +
            '<div class="map-popup-title">Kantor &amp; Balai Desa Tanjung Mas</div>' +
            '<div class="map-popup-desc">Pusat tata kelola pemerintahan desa, pelayanan administrasi surat menyurat warga, dan balai musyawarah masyarakat.</div>' +
            '<div class="map-popup-meta">' +
                '<div><strong>Kepala Desa:</strong> BUHARIS</div>' +
                '<div><strong>Sekretaris Desa:</strong> MUHAMMAD ANGGI RAMBE, S.A.P</div>' +
                '<div><strong>Pelayanan:</strong> Senin - Jumat (08.00 - 15.30 WIB)</div>' +
                '<div><strong>Koordinat:</strong> -0.0045758, 101.0994667</div>' +
            '</div>' +
            '<a href="' + 'https://www.google.com/maps/dir/?api=1&destination=-0.0045758,101.0994667' + '" target="_blank" rel="noopener noreferrer" class="map-popup-action">' +
                'Buka Petunjuk Arah GPS &rarr;' +
            '</a>' +
        '</div>';

        markers.kantor = L.marker([-0.0045758, 101.0994667], {
            icon: createCustomPin('🏛️', 'pin-kantor')
        }).addTo(map).bindPopup(popupKantor);

        // 2. Dusun I Tanjung Mas (Area Pemukiman & Majelis Taklim Istiqamah)
        var popupDusun1 = '<div class="map-popup-card">' +
            '<span class="map-popup-badge" style="background:#dcfce7; color:#15803d;">Dusun I</span>' +
            '<div class="map-popup-title">Dusun Tanjung Mas</div>' +
            '<div class="map-popup-desc">Kawasan pemukiman induk desa, sarana ibadah Majelis Taklim Istiqamah, dan fasilitas publik.</div>' +
            '<div class="map-popup-meta">' +
                '<div><strong>Kepala Dusun:</strong> ADE CANDRA IRAWAN</div>' +
                '<div><strong>Cakupan:</strong> 2 RW / 4 RT</div>' +
            '</div>' +
            '<a href="' + 'https://www.google.com/maps/place/Tj.+Mas,+Kec.+Kampar+Kiri,+Kabupaten+Kampar,+Riau/@-0.0045758,101.0994667,13z/data=!4m6!3m5!1s0x2e2a9d929ca3fc89:0xed39cf77bae641c9!8m2!3d-0.0045758!4d101.0994667' + '" target="_blank" rel="noopener noreferrer" class="map-popup-action">' +
                'Lihat di Google Maps &rarr;' +
            '</a>' +
        '</div>';

        markers.dusun1 = L.marker([0.0050, 101.0920], {
            icon: createCustomPin('🏡', 'pin-dusun')
        }).addTo(map).bindPopup(popupDusun1);

        // 3. Dusun II Pasir Putih (Arah Barat Laut / Perbatasan Sungai Rambai)
        var popupDusun2 = '<div class="map-popup-card">' +
            '<span class="map-popup-badge" style="background:#dcfce7; color:#15803d;">Dusun II</span>' +
            '<div class="map-popup-title">Dusun Pasir Putih</div>' +
            '<div class="map-popup-desc">Sentra perkebunan karet rakyat produktif seluas 225 Hektar serta budidaya tanaman palawija dan jagung.</div>' +
            '<div class="map-popup-meta">' +
                '<div><strong>Kepala Dusun:</strong> SARIYAL</div>' +
                '<div><strong>Cakupan:</strong> 2 RW / 4 RT</div>' +
                '<div><strong>Potensi Unggulan:</strong> Karet Bokar &amp; Pertanian</div>' +
            '</div>' +
            '<a href="' + 'https://www.google.com/maps/place/Tj.+Mas,+Kec.+Kampar+Kiri,+Kabupaten+Kampar,+Riau/@-0.0045758,101.0994667,13z/data=!4m6!3m5!1s0x2e2a9d929ca3fc89:0xed39cf77bae641c9!8m2!3d-0.0045758!4d101.0994667' + '" target="_blank" rel="noopener noreferrer" class="map-popup-action">' +
                'Lihat di Google Maps &rarr;' +
            '</a>' +
        '</div>';

        markers.dusun2 = L.marker([0.0180, 101.0680], {
            icon: createCustomPin('🌳', 'pin-dusun')
        }).addTo(map).bindPopup(popupDusun2);

        // 4. Dusun III Sungai Setingkai (Sentra Perkebunan Kelapa Sawit)
        var popupDusun3 = '<div class="map-popup-card">' +
            '<span class="map-popup-badge" style="background:#fef3c7; color:#b45309;">Dusun III</span>' +
            '<div class="map-popup-title">Dusun Sungai Setingkai</div>' +
            '<div class="map-popup-desc">Sentra perkebunan kelapa sawit swadaya masyarakat seluas 500 Hektar dan kawasan peternakan terpadu.</div>' +
            '<div class="map-popup-meta">' +
                '<div><strong>Kepala Dusun:</strong> WAHYUDI</div>' +
                '<div><strong>Cakupan:</strong> 2 RW / 4 RT</div>' +
                '<div><strong>Potensi Unggulan:</strong> TBS Sawit Swadaya</div>' +
            '</div>' +
            '<a href="' + 'https://www.google.com/maps/place/Tj.+Mas,+Kec.+Kampar+Kiri,+Kabupaten+Kampar,+Riau/@-0.0045758,101.0994667,13z/data=!4m6!3m5!1s0x2e2a9d929ca3fc89:0xed39cf77bae641c9!8m2!3d-0.0045758!4d101.0994667' + '" target="_blank" rel="noopener noreferrer" class="map-popup-action">' +
                'Lihat di Google Maps &rarr;' +
            '</a>' +
        '</div>';

        markers.dusun3 = L.marker([-0.0220, 101.1150], {
            icon: createCustomPin('🌴', 'pin-sawit')
        }).addTo(map).bindPopup(popupDusun3);

        // 5. Dusun IV Sungai Napal (Tenggara / Aliran Perikanan)
        var popupDusun4 = '<div class="map-popup-card">' +
            '<span class="map-popup-badge" style="background:#e0f2fe; color:#0369a1;">Dusun IV</span>' +
            '<div class="map-popup-title">Dusun Sungai Napal</div>' +
            '<div class="map-popup-desc">Kawasan sentra perikanan tepian Sungai Kampar Kiri (80 nelayan) serta pertanian ubi singkong 10 Hektar.</div>' +
            '<div class="map-popup-meta">' +
                '<div><strong>Kepala Dusun:</strong> GUSTIN HARAHAP</div>' +
                '<div><strong>Cakupan:</strong> 2 RW / 4 RT</div>' +
                '<div><strong>Potensi Unggulan:</strong> Ikan Sungai Kampar &amp; Singkong</div>' +
            '</div>' +
            '<a href="' + 'https://www.google.com/maps/place/Tj.+Mas,+Kec.+Kampar+Kiri,+Kabupaten+Kampar,+Riau/@-0.0045758,101.0994667,13z/data=!4m6!3m5!1s0x2e2a9d929ca3fc89:0xed39cf77bae641c9!8m2!3d-0.0045758!4d101.0994667' + '" target="_blank" rel="noopener noreferrer" class="map-popup-action">' +
                'Lihat di Google Maps &rarr;' +
            '</a>' +
        '</div>';

        markers.dusun4 = L.marker([-0.0450, 101.1320], {
            icon: createCustomPin('🐟', 'pin-sungai')
        }).addTo(map).bindPopup(popupDusun4);

        // 6. Majelis Taklim Istiqamah (Patokan Nyata di Google Maps)
        var popupMajelis = '<div class="map-popup-card">' +
            '<span class="map-popup-badge" style="background:#dbeafe; color:#1e40af;">Sarana Keagamaan</span>' +
            '<div class="map-popup-title">Majelis Taklim Istiqamah</div>' +
            '<div class="map-popup-desc">Pusat pembinaan keagamaan, pengajian rutin, dan kegiatan syiar Islam warga Tanjung Mas.</div>' +
        '</div>';

        L.marker([0.0090, 101.1120], {
            icon: createCustomPin('🕌', 'pin-dusun')
        }).addTo(map).bindPopup(popupMajelis);

        // 7. Akses Jalan Poros ke Lipat Kain (13 Km arah Timur Laut)
        var popupJalan = '<div class="map-popup-card">' +
            '<span class="map-popup-badge" style="background:#fef3c7; color:#b45309;">Akses Transportasi</span>' +
            '<div class="map-popup-title">Jalan Poros Lintas Lipat Kain</div>' +
            '<div class="map-popup-desc">Akses jalan penghubung utama sepanjang 13 Km menuju ibukota Kecamatan Kampar Kiri (Lipat Kain).</div>' +
        '</div>';

        L.marker([0.0280, 101.1450], {
            icon: createCustomPin('🛣️', 'pin-sawit')
        }).addTo(map).bindPopup(popupJalan);
    });

    function switchMapLayer(type) {
        if (!map) return;
        currentLayerType = type;
        map.removeLayer(currentTileLayer);
        currentTileLayer = tileLayers[type].addTo(map);
        updateLayerButtons(type);
    }

    function updateLayerButtons(activeType) {
        var stdBtn = document.getElementById('layerStandardBtn');
        var darkBtn = document.getElementById('layerDarkBtn');
        var satBtn = document.getElementById('layerSatBtn');
        
        if (stdBtn) stdBtn.classList.toggle('active', activeType === 'standard');
        if (darkBtn) darkBtn.classList.toggle('active', activeType === 'dark');
        if (satBtn) satBtn.classList.toggle('active', activeType === 'satellite');
    }

    function resetDesaView() {
        if (!map) return;
        map.flyTo([-0.0045758, 101.0994667], 13, { duration: 1.2 });
        if (markers.kantor) {
            setTimeout(function() { markers.kantor.openPopup(); }, 1200);
        }
    }

    function focusToMarker(key) {
        if (!map || !markers[key]) return;
        var targetMarker = markers[key];
        var latLng = targetMarker.getLatLng();
        
        var mapElem = document.getElementById('peta-desa');
        if (mapElem) {
            mapElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        setTimeout(function() {
            map.flyTo(latLng, 14, { duration: 1.2 });
            setTimeout(function() {
                targetMarker.openPopup();
            }, 1200);
        }, 300);
    }

    
        // Fitur Pembantu: Klik di Peta untuk Dapatkan Koordinat Presisi
        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(7);
            var lng = e.latlng.lng.toFixed(7);
            var coordStr = lat + ', ' + lng;
            
            L.popup()
                .setLatLng(e.latlng)
                .setContent(
                    '<div style="text-align:center; padding:0.5rem; font-family:sans-serif;">' +
                    '<strong style="color:var(--brand-primary); font-size:0.9rem;">📍 Titik Koordinat:</strong><br>' +
                    '<input type="text" value="' + coordStr + '" id="coordInput" readonly style="margin:0.4rem 0; padding:0.3rem 0.5rem; width:100%; font-size:0.85rem; font-weight:bold; text-align:center; border:1px solid #cbd5e1; border-radius:4px; background:#f8fafc; color:#0f172a;"><br>' +
                    '<button onclick="navigator.clipboard.writeText(\'' + coordStr + '\'); this.innerText=\'Tersalin! ✔️\';" style="background:#16a34a; color:#fff; border:none; padding:0.3rem 0.75rem; border-radius:4px; font-size:0.8rem; cursor:pointer; font-weight:600;">Salin Koordinat 📋</button>' +
                    '</div>'
                )
                .openOn(map);
        });

    window.addEventListener('themeChanged', function(e) {
        var theme = e.detail.theme;
        if (currentLayerType !== 'satellite') {
            switchMapLayer(theme === 'dark' ? 'dark' : 'standard');
        }
    });
</script>
@endpush
