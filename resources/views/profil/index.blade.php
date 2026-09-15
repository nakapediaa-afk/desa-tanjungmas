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
                        Peta Wilayah &amp; Direktori Titik Lokasi Presisi Desa Tanjung Mas
                    </h2>
                    <p>Kecamatan Kampar Kiri, Kabupaten Kampar, Riau &bull; Titik Pusat: -0.0355, 101.1160 (10 Lokasi Terverifikasi)</p>
                </div>
                <div class="map-actions">
                    <a href="https://www.google.com/maps/search/?api=1&query=-0.0394343,101.1183128" target="_blank" rel="noopener noreferrer" class="map-btn-gmaps" title="Buka Kantor Desa di Google Maps">
                        <i data-lucide="external-link" style="width:15px; height:15px;"></i> Buka di Google Maps
                    </a>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=-0.0394343,101.1183128" target="_blank" rel="noopener noreferrer" class="map-btn-dir" title="Navigasi GPS ke Kantor Desa">
                        <i data-lucide="navigation" style="width:15px; height:15px;"></i> Petunjuk Arah (GPS)
                    </a>
                </div>
            </div>

            <!-- Toolbar Kontrol Layer & Filter -->
            <div class="map-toolbar" style="flex-wrap:wrap; gap:0.75rem;">
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
                <div style="display:flex; align-items:center; gap:0.5rem;">
                    <button type="button" class="map-layer-btn" onclick="resetDesaView()" title="Fokus ke Pusat Pemukiman Desa">
                        <i data-lucide="locate-fixed" style="width:14px; height:14px;"></i> Fokus Desa
                    </button>
                    <button type="button" class="map-layer-btn" style="color:var(--brand-primary); font-weight:700;" onclick="togglePickerNotice()" title="Panduan Menandai Titik Baru">
                        <i data-lucide="crosshair" style="width:14px; height:14px;"></i> Ambil Titik Baru
                    </button>
                </div>
            </div>

            <!-- Petunjuk Pengambilan Titik Koordinat Baru -->
            <div id="pickerNotice" style="display:none; background:#ecfdf5; border-bottom:1px solid #a7f3d0; padding:0.75rem 1.5rem; font-size:0.85rem; color:#065f46; align-items:center; justify-content:space-between;">
                <div style="display:flex; align-items:center; gap:0.5rem;">
                    <i data-lucide="info" style="width:16px; height:16px; flex-shrink:0;"></i>
                    <span><strong>Mode Ambil Titik Aktif:</strong> Klik di mana saja pada peta (terutama di mode Foto Satelit) untuk menyalin koordinat presisi.</span>
                </div>
                <button type="button" onclick="togglePickerNotice()" style="background:none; border:none; color:#047857; font-weight:bold; cursor:pointer;">&times; Tutup</button>
            </div>

            <!-- Container Peta Leaflet -->
            <div id="desaMap" style="height:550px;"></div>

            <!-- Direktori & Filter Kategori 10 Titik Lokasi -->
            <div style="padding:1.5rem 2rem; background:var(--bg-subtle); border-top:1px solid var(--border-subtle);">
                <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; margin-bottom:1.25rem;">
                    <div>
                        <h3 style="font-size:1.15rem; color:var(--text-heading); margin-bottom:0.25rem;">Direktori Titik Lokasi Penting Desa</h3>
                        <p style="font-size:0.85rem; color:var(--text-muted); margin:0;">Klik pada kartu tempat di bawah untuk langsung memperbesar peta ke titik bangunan.</p>
                    </div>
                    
                    <!-- Filter Chips -->
                    <div class="map-filter-container" style="margin:0;">
                        <button type="button" class="map-filter-chip active" onclick="filterLandmarks('all', this)">Semua (10)</button>
                        <button type="button" class="map-filter-chip" onclick="filterLandmarks('pemerintahan', this)">🏛️ Pemerintahan</button>
                        <button type="button" class="map-filter-chip" onclick="filterLandmarks('sarana', this)">🕌 Ibadah &amp; Sekolah</button>
                        <button type="button" class="map-filter-chip" onclick="filterLandmarks('olahraga', this)">⚽ Olahraga</button>
                        <button type="button" class="map-filter-chip" onclick="filterLandmarks('kkn', this)">🎓 Posko KKN</button>
                        <button type="button" class="map-filter-chip" onclick="filterLandmarks('umkm', this)">🛍️ UMKM &amp; Kuliner</button>
                        <button type="button" class="map-filter-chip" onclick="filterLandmarks('alam', this)">🌉 Jembatan &amp; Sungai</button>
                    </div>
                </div>

                <!-- Grid Kartu Lokasi -->
                <div class="map-dusun-grid" id="landmarksGrid" style="padding:0; background:transparent; border-top:none;">
                    
                    <!-- 1. Kantor Desa -->
                    <div class="map-dusun-card landmark-item" data-category="pemerintahan" onclick="focusToLandmark('kantor')">
                        <div class="map-dusun-icon" style="background:#ffe4e6; color:#e11d48;">
                            <i data-lucide="landmark" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#ffe4e6; color:#be123c;">Pusat Pemerintahan</span>
                            <div class="map-dusun-title">Kantor Desa Tanjung Mas</div>
                            <div class="map-dusun-sub">Pusat Pelayanan &bull; Kades Buharis</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0394343, 101.1183128</div>
                        </div>
                    </div>

                    <!-- 2. Stadion Tanjung Mas -->
                    <div class="map-dusun-card landmark-item" data-category="olahraga" onclick="focusToLandmark('stadion')">
                        <div class="map-dusun-icon" style="background:#d1fae5; color:#059669;">
                            <i data-lucide="trophy" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#d1fae5; color:#047857;">Sarana Olahraga</span>
                            <div class="map-dusun-title">Stadion Tanjung Mas</div>
                            <div class="map-dusun-sub">Lapangan Sepak Bola &amp; Turnamen Pemuda</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0380927, 101.1178587</div>
                        </div>
                    </div>

                    <!-- 3. Masjid Al Ikhlas -->
                    <div class="map-dusun-card landmark-item" data-category="sarana" onclick="focusToLandmark('masjid')">
                        <div class="map-dusun-icon" style="background:#ccfbf1; color:#0f766e;">
                            <i data-lucide="moon" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#ccfbf1; color:#115e59;">Tempat Ibadah</span>
                            <div class="map-dusun-title">Masjid Al Ikhlas</div>
                            <div class="map-dusun-sub">Masjid Utama &amp; Majelis Taklim Desa</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0349101, 101.1111048</div>
                        </div>
                    </div>

                    <!-- 4. SD N 020 Desa Tanjung Mas -->
                    <div class="map-dusun-card landmark-item" data-category="sarana" onclick="focusToLandmark('sd')">
                        <div class="map-dusun-icon" style="background:#dbeafe; color:#2563eb;">
                            <i data-lucide="graduation-cap" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#dbeafe; color:#1e40af;">Pendidikan</span>
                            <div class="map-dusun-title">SD N 020 Desa Tanjung Mas</div>
                            <div class="map-dusun-sub">Sekolah Dasar Negeri Kebanggaan Desa</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0353696, 101.1115009</div>
                        </div>
                    </div>

                    <!-- 5. Posko KKN 2026 (KATAMAS) -->
                    <div class="map-dusun-card landmark-item" data-category="kkn" onclick="focusToLandmark('posko')">
                        <div class="map-dusun-icon" style="background:#f3e8ff; color:#7c3aed;">
                            <i data-lucide="users" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#f3e8ff; color:#6d28d9;">Posko Mahasiswa</span>
                            <div class="map-dusun-title">Posko KKN 2026 (KATAMAS)</div>
                            <div class="map-dusun-sub">Sinergi Mahasiswa Membangun Desa</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0350038, 101.1150911</div>
                        </div>
                    </div>

                    <!-- 6. Endang Laundry -->
                    <div class="map-dusun-card landmark-item" data-category="umkm" onclick="focusToLandmark('laundry')">
                        <div class="map-dusun-icon" style="background:#fef3c7; color:#d97706;">
                            <i data-lucide="sparkles" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#fef3c7; color:#b45309;">UMKM Jasa</span>
                            <div class="map-dusun-title">Endang Laundry</div>
                            <div class="map-dusun-sub">Jasa Binatu &amp; Cuci Bersih Warga</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0357961, 101.1187371</div>
                        </div>
                    </div>

                    <!-- 7. RM Jewel and Jenny -->
                    <div class="map-dusun-card landmark-item" data-category="umkm" onclick="focusToLandmark('rm_jewel')">
                        <div class="map-dusun-icon" style="background:#ffedd5; color:#ea580c;">
                            <i data-lucide="utensils" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#ffedd5; color:#c2410c;">Kuliner Lokal</span>
                            <div class="map-dusun-title">RM Jewel and Jenny</div>
                            <div class="map-dusun-sub">Rumah Makan Selera Nusantara &amp; Masakan Khas</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0357251, 101.1195664</div>
                        </div>
                    </div>

                    <!-- 8. Toko Sitar Raja Tani -->
                    <div class="map-dusun-card landmark-item" data-category="umkm" onclick="focusToLandmark('toko_tani')">
                        <div class="map-dusun-icon" style="background:#ecfccb; color:#65a30d;">
                            <i data-lucide="shopping-bag" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#ecfccb; color:#4d7c0f;">Saprotan Pertanian</span>
                            <div class="map-dusun-title">Toko Sitar Raja Tani</div>
                            <div class="map-dusun-sub">Penyedia Pupuk &amp; Sarana Kebun Sawit/Karet</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0357921, 101.1205412</div>
                        </div>
                    </div>

                    <!-- 9. Jembatan Gantung -->
                    <div class="map-dusun-card landmark-item" data-category="alam" onclick="focusToLandmark('jembatan')">
                        <div class="map-dusun-icon" style="background:#cffafe; color:#0891b2;">
                            <i data-lucide="git-commit" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#cffafe; color:#0e7490;">Infrastruktur Vital</span>
                            <div class="map-dusun-title">Jembatan Gantung</div>
                            <div class="map-dusun-sub">Akses Transportasi Warga Menyeberang Sungai</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0291138, 101.1112966</div>
                        </div>
                    </div>

                    <!-- 10. Sungai Setingkai -->
                    <div class="map-dusun-card landmark-item" data-category="alam" onclick="focusToLandmark('sungai')">
                        <div class="map-dusun-icon" style="background:#e0f2fe; color:#0284c7;">
                            <i data-lucide="droplets" style="width:20px; height:20px;"></i>
                        </div>
                        <div>
                            <span class="landmark-badge" style="background:#e0f2fe; color:#0369a1;">Geografis Alam</span>
                            <div class="map-dusun-title">Sungai Setingkai</div>
                            <div class="map-dusun-sub">Aliran Air Alami Penopang Pertanian &amp; Perikanan</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); margin-top:0.35rem;">-0.0292396, 101.1116503</div>
                        </div>
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

    // 10 Titik Koordinat Terverifikasi Asli
    var landmarksData = {
        kantor: {
            title: 'Kantor Desa Tanjung Mas',
            badge: 'Pusat Pemerintahan',
            badgeBg: '#ffe4e6',
            badgeColor: '#e11d48',
            pinClass: 'pin-kantor',
            icon: '🏛️',
            coords: [-0.0394343050684987, 101.11831278472829],
            desc: 'Pusat tata kelola pemerintahan desa, pelayanan surat administrasi, dan balai musyawarah masyarakat Desa Tanjung Mas.',
            meta: [
                'Kepala Desa: <strong>BUHARIS</strong>',
                'Sekretaris Desa: <strong>MUHAMMAD ANGGI RAMBE, S.A.P</strong>',
                'Jam Pelayanan: Senin - Jumat (08.00 - 15.30 WIB)'
            ]
        },
        stadion: {
            title: 'Stadion Tanjung Mas',
            badge: 'Sarana Olahraga',
            badgeBg: '#d1fae5',
            badgeColor: '#059669',
            pinClass: 'pin-stadion',
            icon: '⚽',
            coords: [-0.03809274611092639, 101.11785873794389],
            desc: 'Lapangan sepak bola utama dan pusat turnamen pemuda desa serta kegiatan perayaan hari kemerdekaan dan keolahragaan.',
            meta: [
                'Fasilitas: Lapangan Bola &amp; Tribun Terbuka',
                'Pengelola: Pemuda Karang Taruna Desa'
            ]
        },
        masjid: {
            title: 'Masjid Al Ikhlas',
            badge: 'Sarana Ibadah',
            badgeBg: '#ccfbf1',
            badgeColor: '#0f766e',
            pinClass: 'pin-masjid',
            icon: '🕌',
            coords: [-0.03491013564125363, 101.11110477658805],
            desc: 'Masjid utama desa sebagai pusat shalat berjamaah, pengajian akbar, peringatan hari besar Islam, dan pembinaan majelis taklim.',
            meta: [
                'Status: Masjid Jami Desa Tanjung Mas',
                'Kegiatan: Shalat 5 Waktu, Majelis Taklim, TPA/MDA'
            ]
        },
        sd: {
            title: 'SD N 020 Desa Tanjung Mas',
            badge: 'Pendidikan Dasar',
            badgeBg: '#dbeafe',
            badgeColor: '#2563eb',
            pinClass: 'pin-sekolah',
            icon: '🏫',
            coords: [-0.035369617472599764, 101.1115008732436],
            desc: 'Sekolah Dasar Negeri 020 yang mendidik dan membina tunas bangsa generasi penerus masyarakat Desa Tanjung Mas.',
            meta: [
                'Jenjang: Sekolah Dasar Negeri (SDN)',
                'Status: Terakreditasi Kemendikbud'
            ]
        },
        posko: {
            title: 'Posko KKN 2026 (KATAMAS)',
            badge: 'Posko Mahasiswa',
            badgeBg: '#f3e8ff',
            badgeColor: '#7c3aed',
            pinClass: 'pin-posko',
            icon: '🎓',
            coords: [-0.03500384516210058, 101.11509114343623],
            desc: 'Pusat posko mahasiswa Kuliah Kerja Nyata (KKN) 2026 KATAMAS yang aktif mengabdi memajukan desa dan digitalisasi UMKM.',
            meta: [
                'Program: KKN Tematik &amp; Pemberdayaan Warga',
                'Mitra: Pemerintah Desa Tanjung Mas'
            ]
        },
        laundry: {
            title: 'Endang Laundry',
            badge: 'UMKM Jasa',
            badgeBg: '#fef3c7',
            badgeColor: '#d97706',
            pinClass: 'pin-umkm',
            icon: '🧺',
            coords: [-0.03579608863801613, 101.1187371097514],
            desc: 'Usaha binatu dan pencucian pakaian kiloan warga terpercaya, bersih, rapi, dan harum.',
            meta: [
                'Kategori: Jasa Cuci Kiloan &amp; Satuan',
                'Layanan: Antar Jemput Warga Sekitar'
            ]
        },
        rm_jewel: {
            title: 'Rumah Makan Jewel and Jenny',
            badge: 'Kuliner Lokal',
            badgeBg: '#ffedd5',
            badgeColor: '#ea580c',
            pinClass: 'pin-umkm',
            icon: '🍽️',
            coords: [-0.035725050634152614, 101.11956638882182],
            desc: 'Rumah makan favorit warga dan pelintas jalan menyajikan aneka sajian masakan khas nusantara dan lauk lezat berselera.',
            meta: [
                'Menu Unggulan: Masakan Ikan Sungai &amp; Lauk Kampung',
                'Layanan: Makan di Tempat &amp; Pesanan Nasi Kotak'
            ]
        },
        toko_tani: {
            title: 'Toko Sitar Raja Tani',
            badge: 'Saprotan Pertanian',
            badgeBg: '#ecfccb',
            badgeColor: '#65a30d',
            pinClass: 'pin-umkm',
            icon: '🌾',
            coords: [-0.035792065319827274, 101.12054117020318],
            desc: 'Penyedia sarana produksi pertanian terlengkap, pupuk tanaman sawit &amp; karet, herbisida, dan perlengkapan perkebunan petani.',
            meta: [
                'Komoditas: Pupuk, Obat Hama, Alat Pertanian',
                'Pelayanan: Petani Sawit &amp; Karet Rakyat'
            ]
        },
        jembatan: {
            title: 'Jembatan Gantung',
            badge: 'Infrastruktur Vital',
            badgeBg: '#cffafe',
            badgeColor: '#0891b2',
            pinClass: 'pin-jembatan',
            icon: '🌉',
            coords: [-0.029113756100239137, 101.11129655828843],
            desc: 'Infrastruktur jembatan gantung ikonik yang menghubungkan akses transportasi, mobilitas warga, dan jalur angkut hasil kebun.',
            meta: [
                'Fungsi: Jembatan Penyeberangan Roda 2 &amp; Pejalan Kaki',
                'Lokasi: Melintasi Aliran Sungai Setingkai'
            ]
        },
        sungai: {
            title: 'Sungai Setingkai',
            badge: 'Geografis Alami',
            badgeBg: '#e0f2fe',
            badgeColor: '#0284c7',
            pinClass: 'pin-sungai',
            icon: '🌊',
            coords: [-0.029239586357994438, 101.11165030714561],
            desc: 'Aliran sungai alami yang asri, sumber air vital bagi ekosistem pertanian, dan spot pemancingan ikan tradisional warga lokal.',
            meta: [
                'Aliran: Mengalir ke Daerah Aliran Sungai Kampar Kiri',
                'Potensi: Perikanan Sungai &amp; Irigasi Alami'
            ]
        }
    };

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
            html: '<div class="custom-map-pin ' + pinClass + '" style="width:36px; height:36px; font-size:18px;">' + iconHtml + '</div>',
            className: 'custom-pin-wrapper',
            iconSize: [36, 36],
            iconAnchor: [18, 18],
            popupAnchor: [0, -18]
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Titik Tengah Pusat Pemukiman Desa Tanjung Mas (Sesuai 10 Titik Terverifikasi)
        var desaCenter = [-0.0355, 101.1160];
        
        map = L.map('desaMap', {
            center: desaCenter,
            zoom: 15,
            scrollWheelZoom: false
        });

        // Layer Default
        var isDark = document.documentElement.getAttribute('data-theme') === 'dark';
        currentLayerType = isDark ? 'dark' : 'standard';
        currentTileLayer = tileLayers[currentLayerType].addTo(map);
        updateLayerButtons(currentLayerType);

        // Poligon Garis Batas Teritorial Melingkupi Kawasan Pemukiman & Kebun Tanjung Mas
        var boundaryCoords = [
            [-0.0240, 101.1080],
            [-0.0260, 101.1240],
            [-0.0330, 101.1300],
            [-0.0430, 101.1260],
            [-0.0450, 101.1140],
            [-0.0400, 101.1040],
            [-0.0300, 101.1020]
        ];

        var territoryPolygon = L.polygon(boundaryCoords, {
            color: '#16a34a',
            weight: 2.5,
            dashArray: '6, 8',
            fillColor: '#22c55e',
            fillOpacity: 0.06
        }).addTo(map);
        territoryPolygon.bindTooltip('Batas Kawasan Inti Pemukiman Desa Tanjung Mas', {
            sticky: true,
            direction: 'top'
        });

        // Daftarkan 10 Marker ke Peta
        for (var key in landmarksData) {
            (function(k) {
                var item = landmarksData[k];
                var lat = item.coords[0];
                var lng = item.coords[1];
                var coordFormatted = lat.toFixed(7) + ', ' + lng.toFixed(7);

                var metaHtml = '';
                if (item.meta && item.meta.length) {
                    metaHtml = '<div class="map-popup-meta">';
                    for (var i = 0; i < item.meta.length; i++) {
                        metaHtml += '<div>' + item.meta[i] + '</div>';
                    }
                    metaHtml += '<div style="margin-top:0.35rem; font-family:monospace; font-size:0.78rem; color:#475569;">📍 ' + coordFormatted + '</div>';
                    metaHtml += '</div>';
                }

                var popupHtml = '<div class="map-popup-card">' +
                    '<span class="map-popup-badge" style="background:' + item.badgeBg + '; color:' + item.badgeColor + ';">' + item.badge + '</span>' +
                    '<div class="map-popup-title">' + item.icon + ' ' + item.title + '</div>' +
                    '<div class="map-popup-desc">' + item.desc + '</div>' +
                    metaHtml +
                    '<div style="display:flex; gap:0.5rem; margin-top:0.75rem;">' +
                        '<a href="https://www.google.com/maps/dir/?api=1&destination=' + lat + ',' + lng + '" target="_blank" rel="noopener noreferrer" class="map-popup-action" style="flex:1; text-align:center;">' +
                            'Petunjuk Arah GPS &rarr;' +
                        '</a>' +
                        '<button onclick="navigator.clipboard.writeText('' + coordFormatted + ''); this.innerText='Tersalin!';" style="background:var(--bg-subtle); border:1px solid var(--border-subtle); color:var(--text-heading); padding:0.4rem 0.6rem; border-radius:6px; font-size:0.75rem; cursor:pointer; font-weight:600;" title="Salin Koordinat">Salin 📍</button>' +
                    '</div>' +
                '</div>';

                markers[k] = L.marker([lat, lng], {
                    icon: createCustomPin(item.icon, item.pinClass)
                }).addTo(map).bindPopup(popupHtml);
            })(key);
        }

        // Fitur Klik Peta untuk Menandai Titik Baru
        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(7);
            var lng = e.latlng.lng.toFixed(7);
            var coordStr = lat + ', ' + lng;
            
            L.popup()
                .setLatLng(e.latlng)
                .setContent(
                    '<div style="text-align:center; padding:0.5rem; font-family:sans-serif; min-width:200px;">' +
                    '<strong style="color:var(--brand-primary); font-size:0.9rem;">📍 Titik Koordinat Terpilih:</strong><br>' +
                    '<input type="text" value="' + coordStr + '" id="coordInput" readonly style="margin:0.4rem 0; padding:0.35rem 0.5rem; width:100%; font-size:0.85rem; font-weight:bold; text-align:center; border:1px solid #cbd5e1; border-radius:6px; background:#f8fafc; color:#0f172a;"><br>' +
                    '<button onclick="navigator.clipboard.writeText('' + coordStr + ''); this.innerText='Tersalin! ✅';" style="background:#16a34a; color:#fff; border:none; padding:0.35rem 0.85rem; border-radius:6px; font-size:0.8rem; cursor:pointer; font-weight:600; box-shadow:0 2px 6px rgba(22,163,74,0.3);">Salin Koordinat 📋</button>' +
                    '</div>'
                )
                .openOn(map);
        });

        // Buka popup Kantor Desa secara otomatis
        setTimeout(function() {
            if (markers.kantor) {
                markers.kantor.openPopup();
            }
        }, 1000);
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
        map.flyTo([-0.0355, 101.1160], 15, { duration: 1.2 });
        if (markers.kantor) {
            setTimeout(function() { markers.kantor.openPopup(); }, 1200);
        }
    }

    function focusToLandmark(key) {
        if (!map || !markers[key]) return;
        var targetMarker = markers[key];
        var latLng = targetMarker.getLatLng();
        
        var mapElem = document.getElementById('peta-desa');
        if (mapElem) {
            mapElem.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        setTimeout(function() {
            map.flyTo(latLng, 17, { duration: 1.2 });
            setTimeout(function() {
                targetMarker.openPopup();
            }, 1200);
        }, 250);
    }

    function filterLandmarks(category, btnElement) {
        var chips = document.querySelectorAll('.map-filter-chip');
        chips.forEach(function(c) { c.classList.remove('active'); });
        if (btnElement) btnElement.classList.add('active');

        var items = document.querySelectorAll('.landmark-item');
        items.forEach(function(item) {
            if (category === 'all' || item.getAttribute('data-category') === category) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function togglePickerNotice() {
        var notice = document.getElementById('pickerNotice');
        if (notice) {
            var isHidden = notice.style.display === 'none';
            notice.style.display = isHidden ? 'flex' : 'none';
            if (isHidden) {
                switchMapLayer('satellite');
            }
        }
    }
</script>

