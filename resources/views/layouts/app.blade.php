<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Master Tags -->
    <title>@yield('title', 'Website Resmi Desa Tanjung Mas') - Kec. Kampar Kiri, Kab. Kampar, Riau</title>
    <meta name="description" content="@yield('meta_description', 'Portal Resmi Sistem Informasi dan Layanan Publik Terpadu Pemerintah Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar, Provinsi Riau.')">
    <meta name="keywords" content="Desa Tanjung Mas, Kampar Kiri, Kabupaten Kampar, Riau, Website Desa, Layanan Surat Desa, APBDes Tanjung Mas, Sawit Tanjung Mas, Karet Tanjung Mas, Berita Desa Tanjung Mas">
    <meta name="author" content="Pemerintah Desa Tanjung Mas">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook / WhatsApp Preview -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Website Resmi Desa Tanjung Mas') - Kec. Kampar Kiri, Riau">
    <meta property="og:description" content="@yield('meta_description', 'Portal Resmi Sistem Informasi dan Layanan Publik Terpadu Pemerintah Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar, Riau.')">
    <meta property="og:image" content="@yield('meta_image', 'https://images.unsplash.com/photo-1588392382834-a891154bca4d?w=1200&auto=format&fit=crop&q=80')">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Desa Tanjung Mas">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Website Resmi Desa Tanjung Mas') - Kec. Kampar Kiri, Riau">
    <meta name="twitter:description" content="@yield('meta_description', 'Portal Resmi Sistem Informasi Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar, Riau.')">
    <meta name="twitter:image" content="@yield('meta_image', 'https://images.unsplash.com/photo-1588392382834-a891154bca4d?w=1200&auto=format&fit=crop&q=80')">

    <!-- Schema.org JSON-LD Structured Data for Google -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "GovernmentOrganization",
      "name": "Pemerintah Desa Tanjung Mas",
      "url": "{{ url('/') }}",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Jl. Lintas Lipat Kain - Lubuk Agung",
        "addressLocality": "Kecamatan Kampar Kiri",
        "addressRegion": "Riau",
        "postalCode": "28472",
        "addressCountry": "ID"
      },
      "telephone": "+6281234567890",
      "email": "kantor@tanjungmas-kampar.desa.id"
    }
    </script>

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="preconnect" href="https://images.unsplash.com">

    <!-- Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest" defer></script>

    <!-- Pure Modern CSS Architecture -->
    <link rel="stylesheet" href="{{ asset('css/desa.css') }}">
    @stack('styles')
</head>
<body id="top">

    @if(session('is_admin'))
    <!-- Top Admin Management Bar (Only Visible for Logged-In Officials) -->
    <div style="background:#0f172a; color:#f8fafc; font-size:0.8rem; padding:0.45rem 1rem; border-bottom:1px solid rgba(255,255,255,0.1); position:sticky; top:0; z-index:1000; display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; align-items:center; gap:0.5rem;">
            <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#22c55e; box-shadow:0 0 8px #22c55e;"></span>
            <strong>Sesi Admin Aktif</strong> &bull; <span>Pemerintah Desa Tanjung Mas</span>
        </div>
        <div style="display:flex; align-items:center; gap:0.75rem;">
            <a href="{{ route('admin.dashboard') }}" style="color:#6ee7b7; text-decoration:none; font-weight:600; display:flex; align-items:center; gap:0.3rem;">
                <i data-lucide="layout-dashboard" style="width:14px; height:14px;"></i> Panel Dashboard
            </a>
            <span style="color:#475569;">|</span>
            <a href="{{ route('admin.logout') }}" style="color:#fca5a5; text-decoration:none; display:flex; align-items:center; gap:0.3rem;">
                <i data-lucide="log-out" style="width:14px; height:14px;"></i> Keluar
            </a>
        </div>
    </div>
    @endif

    <!-- Top Info Bar (Public) -->
    <div class="topbar">
        <div class="container topbar-wrapper">
            <div class="topbar-info">
                <div class="topbar-item">
                    <span class="topbar-badge">RESMI</span>
                    <span>Kantor Desa Tanjung Mas &bull; Kampar Kiri, Riau</span>
                </div>
                <div class="topbar-item">
                    <i data-lucide="clock" style="width:13px; height:13px;"></i>
                    <span>Senin - Jumat 08.00 - 15.30 WIB</span>
                </div>
            </div>
            <div>
                <!-- Modern Animated Theme Switcher -->
                <button id="themeToggle" class="theme-toggle-btn" title="Ganti Mode Tampilan (Gelap/Terang)" aria-label="Ganti Mode Tampilan">
                    <span class="theme-toggle-icon-wrap" id="themeIconWrap">
                        <!-- Sun SVG -->
                        <svg class="theme-svg sun-svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2"></path>
                            <path d="M12 20v2"></path>
                            <path d="m4.93 4.93 1.41 1.41"></path>
                            <path d="m17.66 17.66 1.41 1.41"></path>
                            <path d="M2 12h2"></path>
                            <path d="M20 12h2"></path>
                            <path d="m6.34 17.66-1.41 1.41"></path>
                            <path d="m19.07 4.93-1.41 1.41"></path>
                        </svg>
                        <!-- Moon SVG -->
                        <svg class="theme-svg moon-svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                        </svg>
                    </span>
                    <span id="themeLabel">Mode Gelap</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="header">
        <div class="container nav-wrapper">
            <a href="{{ route('home') }}" class="brand-link" aria-label="Beranda Desa Tanjung Mas">
                <div class="brand-emblem">
                    <i data-lucide="landmark" style="width:22px; height:22px;"></i>
                </div>
                <div class="brand-text">
                    <span class="brand-title">DESA TANJUNG MAS</span>
                    <span class="brand-subtitle">Kec. Kampar Kiri &bull; Kab. Kampar, Riau</span>
                </div>
            </a>

            <!-- Desktop Nav Menu -->
            <ul class="nav-menu">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                <li class="nav-item"><a href="{{ route('profil.index') }}" class="nav-link {{ request()->routeIs('profil.*') ? 'active' : '' }}">Profil</a></li>
                <li class="nav-item"><a href="{{ route('berita.index') }}" class="nav-link {{ request()->routeIs('berita.*') ? 'active' : '' }}">Warta Desa</a></li>
                <li class="nav-item"><a href="{{ route('layanan.index') }}" class="nav-link {{ request()->routeIs('layanan.*') ? 'active' : '' }}">Layanan Surat</a></li>
                <li class="nav-item"><a href="{{ route('statistik.index') }}" class="nav-link {{ request()->routeIs('statistik.*') ? 'active' : '' }}">Statistik</a></li>
                <li class="nav-item"><a href="{{ route('apbdes.index') }}" class="nav-link {{ request()->routeIs('apbdes.*') ? 'active' : '' }}">APBDes</a></li>
                <li class="nav-item"><a href="{{ route('umkm.index') }}" class="nav-link {{ request()->routeIs('umkm.*') ? 'active' : '' }}">Komoditas &amp; UMKM</a></li>
            </ul>

            <!-- Mobile Hamburger Button -->
            <button id="drawerOpenBtn" class="mobile-toggle" aria-label="Buka Menu Navigasi">
                <i data-lucide="menu" style="width:20px; height:20px;"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div id="mobileDrawer" class="mobile-drawer">
        <div id="drawerBackdrop" class="drawer-backdrop"></div>
        <div class="drawer-panel">
            <div class="drawer-header">
                <div style="display:flex; align-items:center; gap:0.6rem;">
                    <div class="brand-emblem" style="width:36px; height:36px; border-radius:8px;">
                        <i data-lucide="landmark" style="width:18px; height:18px;"></i>
                    </div>
                    <div>
                        <div style="font-weight:700; font-size:0.95rem; color:var(--text-heading);">DESA TANJUNG MAS</div>
                        <div style="font-size:0.75rem; color:var(--text-muted);">Kampar Kiri, Riau</div>
                    </div>
                </div>
                <button id="drawerCloseBtn" aria-label="Tutup Menu" style="background:none; border:none; color:var(--text-muted); cursor:pointer; padding:0.25rem; display:grid; place-items:center;">
                    <i data-lucide="x" style="width:20px; height:20px;"></i>
                </button>
            </div>

            <div class="drawer-nav">
                <a href="{{ route('home') }}" class="drawer-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    <i data-lucide="home" style="width:18px; height:18px;"></i>
                    <span>Beranda Utama</span>
                </a>
                <a href="{{ route('profil.index') }}" class="drawer-link {{ request()->routeIs('profil.*') ? 'active' : '' }}">
                    <i data-lucide="building-2" style="width:18px; height:18px;"></i>
                    <span>Profil &amp; Kelembagaan</span>
                </a>
                <a href="{{ route('berita.index') }}" class="drawer-link {{ request()->routeIs('berita.*') ? 'active' : '' }}">
                    <i data-lucide="newspaper" style="width:18px; height:18px;"></i>
                    <span>Warta &amp; Informasi Desa</span>
                </a>
                <a href="{{ route('layanan.index') }}" class="drawer-link {{ request()->routeIs('layanan.*') ? 'active' : '' }}">
                    <i data-lucide="file-check-2" style="width:18px; height:18px;"></i>
                    <span>Pelayanan Surat Warga</span>
                </a>
                <a href="{{ route('statistik.index') }}" class="drawer-link {{ request()->routeIs('statistik.*') ? 'active' : '' }}">
                    <i data-lucide="bar-chart-2" style="width:18px; height:18px;"></i>
                    <span>Statistik Kependudukan</span>
                </a>
                <a href="{{ route('apbdes.index') }}" class="drawer-link {{ request()->routeIs('apbdes.*') ? 'active' : '' }}">
                    <i data-lucide="pie-chart" style="width:18px; height:18px;"></i>
                    <span>Transparansi APBDes</span>
                </a>
                <a href="{{ route('umkm.index') }}" class="drawer-link {{ request()->routeIs('umkm.*') ? 'active' : '' }}">
                    <i data-lucide="store" style="width:18px; height:18px;"></i>
                    <span>Pasar Sawit &amp; UMKM</span>
                </a>
            </div>

            <div style="margin-top:auto; padding-top:1.5rem; border-top:1px solid var(--border-subtle);">
                <div style="font-size:0.8rem; color:var(--text-muted); display:flex; align-items:center; gap:0.4rem; margin-bottom:0.4rem;">
                    <i data-lucide="phone" style="width:14px; height:14px;"></i> 0812-3456-7890
                </div>
                <div style="font-size:0.75rem; color:var(--text-muted);">
                    Kantor Desa Tanjung Mas &bull; 28472
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Body -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-brand-title">Pemerintah Desa Tanjung Mas</div>
                    <div class="footer-brand-sub">Kecamatan Kampar Kiri, Kabupaten Kampar, Provinsi Riau</div>
                    <p class="footer-text">
                        Sistem informasi dan portal pelayanan publik terpadu Desa Tanjung Mas. Mendorong kemandirian masyarakat berbasis perkebunan kelapa sawit 500 Ha & karet 225 Ha, transparansi anggaran, serta kemudahan akses birokrasi warga.
                    </p>
                </div>

                <div>
                    <div class="footer-heading">Navigasi Utama</div>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Beranda Utama</a></li>
                        <li><a href="{{ route('profil.index') }}">Profil &amp; Visi Misi</a></li>
                        <li><a href="{{ route('berita.index') }}">Warta &amp; Agenda Desa</a></li>
                        <li><a href="{{ route('layanan.index') }}">Persyaratan Surat</a></li>
                        <li><a href="{{ route('statistik.index') }}">Statistik Kependudukan</a></li>
                        <li><a href="{{ route('apbdes.index') }}">Laporan APBDes</a></li>
                        <li><a href="{{ route('umkm.index') }}">Komoditas &amp; UMKM</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-heading">Jam Pelayanan</div>
                    <p class="footer-text"><strong>Senin - Kamis:</strong><br>08.00 - 15.30 WIB</p>
                    <p class="footer-text" style="margin-top:0.5rem;"><strong>Jumat:</strong><br>08.00 - 14.30 WIB</p>
                    <p class="footer-text" style="margin-top:0.5rem;"><span style="color:#f59e0b;">Sabtu & Minggu:</span><br>Libur Pelayanan</p>
                </div>

                <div>
                    <div class="footer-heading">Kontak & Lokasi Kantor</div>
                    <div class="footer-contact-item">
                        <i data-lucide="map-pin" style="width:16px; height:16px;"></i>
                        <span>Jl. Lintas Lipat Kain - Lubuk Agung, Desa Tanjung Mas, Kec. Kampar Kiri, Kab. Kampar, Riau 28472</span>
                    </div>
                    <div class="footer-contact-item">
                        <i data-lucide="phone" style="width:16px; height:16px;"></i>
                        <span>0812-3456-7890 (Kantor Desa)</span>
                    </div>
                    <div class="footer-contact-item">
                        <i data-lucide="mail" style="width:16px; height:16px;"></i>
                        <span>kantor@tanjungmas-kampar.desa.id</span>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div>&copy; {{ date('Y') }} Pemerintah Desa Tanjung Mas. Seluruh hak cipta dilindungi undang-undang.</div>
                <div>
                    <a href="#top" style="color:#22c55e; font-weight:600; text-decoration:none;">Kembali ke Atas &uarr;</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) {
                lucide.createIcons();
            }
        });

        // Animated Theme Switcher Logic
        const themeBtn = document.getElementById('themeToggle');
        const themeLabel = document.getElementById('themeLabel');
        const themeIconWrap = document.getElementById('themeIconWrap');
        
        function applyTheme(theme, animate = false) {
            if (animate && themeIconWrap) {
                themeIconWrap.style.transform = 'rotate(360deg) scale(0.7)';
                setTimeout(() => {
                    themeIconWrap.style.transform = '';
                }, 400);
            }

            if (theme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
                if (themeLabel) themeLabel.textContent = 'Mode Terang';
            } else {
                document.documentElement.removeAttribute('data-theme');
                if (themeLabel) themeLabel.textContent = 'Mode Gelap';
            }
            localStorage.setItem('desa_theme', theme);
            window.dispatchEvent(new CustomEvent('themeChanged', { detail: { theme } }));
        }

        const savedTheme = localStorage.getItem('desa_theme') || 'light';
        applyTheme(savedTheme, false);

        if (themeBtn) {
            themeBtn.addEventListener('click', () => {
                const current = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
                const nextTheme = current === 'dark' ? 'light' : 'dark';
                applyTheme(nextTheme, true);
            });
        }

        // Mobile Drawer
        const drawer = document.getElementById('mobileDrawer');
        const openBtn = document.getElementById('drawerOpenBtn');
        const closeBtn = document.getElementById('drawerCloseBtn');
        const backdrop = document.getElementById('drawerBackdrop');

        function openDrawer() { if (drawer) drawer.classList.add('open'); }
        function closeDrawer() { if (drawer) drawer.classList.remove('open'); }

        if (openBtn) openBtn.addEventListener('click', openDrawer);
        if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
        if (backdrop) backdrop.addEventListener('click', closeDrawer);
    </script>
    @stack('scripts')
</body>
</html>
