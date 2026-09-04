<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_desc', 'Portal Resmi Pemerintah Desa Tanjung Mas, Kecamatan Kampar Kiri, Kabupaten Kampar, Provinsi Riau. Layanan masyarakat, transparansi anggaran, kabar desa, dan UMKM.')">
    <title>@yield('title', 'Beranda') &bull; Desa Tanjung Mas, Kampar Kiri</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Lora:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/desa.css') }}">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
</head>
<body>
    <!-- Top Government Notification Bar -->
    <div class="topbar">
        <div class="container topbar-wrapper">
            <div class="topbar-info">
                <div class="topbar-item">
                    <i data-lucide="shield-check" style="width:14px; height:14px; color:#34d399;"></i>
                    <span>Portal Resmi Pemerintah Desa Tanjung Mas</span>
                    <span class="topbar-badge">RIAU 28472</span>
                </div>
                <div class="topbar-item">
                    <i data-lucide="map-pin" style="width:14px; height:14px; color:#34d399;"></i>
                    <span>Kec. Kampar Kiri &bull; Kab. Kampar</span>
                </div>
            </div>
            <div style="display:flex; align-items:center; gap:1.25rem;">
                <div class="topbar-item">
                    <i data-lucide="phone-call" style="width:14px; height:14px; color:#34d399;"></i>
                    <span>Layanan Kantor: <strong>0812-3456-7890</strong></span>
                </div>
                <div class="topbar-item">
                    <i data-lucide="clock" style="width:14px; height:14px; color:#34d399;"></i>
                    <span>Sen - Jum: 08.00 - 15.30 WIB</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Header -->
    <header class="header">
        <div class="container nav-wrapper">
            <a href="{{ route('home') }}" class="brand-link">
                <div class="brand-emblem">
                    <i data-lucide="tree-palm" style="width:24px; height:24px;"></i>
                </div>
                <div class="brand-text">
                    <div class="brand-title">Desa Tanjung Mas</div>
                    <div class="brand-subtitle">Kecamatan Kampar Kiri &bull; Kabupaten Kampar</div>
                </div>
            </a>

            <!-- Main Desktop Navigation -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i data-lucide="home" style="width:15px; height:15px;"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <!-- Profil Desa -->
                <li class="nav-item">
                    <a href="{{ route('profil.index') }}" class="nav-link {{ request()->routeIs('profil.*') ? 'active' : '' }}">
                        <i data-lucide="building-2" style="width:15px; height:15px;"></i>
                        <span>Profil Desa</span>
                    </a>
                </li>

                <!-- Warta Desa -->
                <li class="nav-item">
                    <a href="{{ route('berita.index') }}" class="nav-link {{ request()->routeIs('berita.*') ? 'active' : '' }}">
                        <i data-lucide="newspaper" style="width:15px; height:15px;"></i>
                        <span>Warta Desa</span>
                    </a>
                </li>

                <!-- Layanan Surat -->
                <li class="nav-item">
                    <a href="{{ route('layanan.index') }}" class="nav-link {{ request()->routeIs('layanan.*') ? 'active' : '' }}">
                        <i data-lucide="file-check-2" style="width:15px; height:15px;"></i>
                        <span>Layanan Surat</span>
                    </a>
                </li>

                <!-- Statistik Data -->
                <li class="nav-item">
                    <a href="{{ route('statistik.index') }}" class="nav-link {{ request()->routeIs('statistik.*') ? 'active' : '' }}">
                        <i data-lucide="bar-chart-2" style="width:15px; height:15px;"></i>
                        <span>Statistik</span>
                    </a>
                </li>

                <!-- Transparansi APBDes -->
                <li class="nav-item">
                    <a href="{{ route('apbdes.index') }}" class="nav-link {{ request()->routeIs('apbdes.*') ? 'active' : '' }}">
                        <i data-lucide="pie-chart" style="width:15px; height:15px;"></i>
                        <span>APBDes</span>
                    </a>
                </li>

                <!-- Pasar UMKM -->
                <li class="nav-item">
                    <a href="{{ route('umkm.index') }}" class="nav-link {{ request()->routeIs('umkm.*') ? 'active' : '' }}">
                        <i data-lucide="store" style="width:15px; height:15px;"></i>
                        <span>Pasar UMKM</span>
                    </a>
                </li>
            </ul>

            <!-- Nav Actions & Tools -->
            <div class="nav-tools">
                <button class="btn-theme" id="themeToggle" title="Ganti Mode Gelap / Terang">
                    <i data-lucide="moon" id="themeIcon" style="width:18px; height:18px;"></i>
                </button>

                @if(session('is_admin'))
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">
                        <i data-lucide="layout-dashboard" style="width:14px; height:14px;"></i>
                        <span>Dashboard</span>
                    </a>
                @else
                    <a href="{{ route('admin.login') }}" class="btn btn-outline btn-sm">
                        <i data-lucide="lock" style="width:14px; height:14px;"></i>
                        <span>Login Petugas</span>
                    </a>
                @endif

                <button class="mobile-toggle" id="drawerOpenBtn" title="Buka Menu">
                    <i data-lucide="menu" style="width:20px; height:20px;"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Navigation -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="drawer-backdrop" id="drawerBackdrop"></div>
        <div class="drawer-panel">
            <div class="drawer-header">
                <div class="brand-link">
                    <div class="brand-emblem" style="width:36px; height:36px;">
                        <i data-lucide="tree-palm" style="width:20px; height:20px;"></i>
                    </div>
                    <div class="brand-text">
                        <div class="brand-title" style="font-size:1.05rem;">Desa Tanjung Mas</div>
                        <div class="brand-subtitle" style="font-size:0.7rem;">Kampar Kiri, Riau</div>
                    </div>
                </div>
                <button id="drawerCloseBtn" style="border:none; background:none; cursor:pointer; color:var(--text-muted);">
                    <i data-lucide="x" style="width:22px; height:22px;"></i>
                </button>
            </div>
            
            <div class="drawer-nav">
                <div class="drawer-section-title">Menu Utama</div>
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

                <div class="drawer-section-title">Akses Petugas</div>
                @if(session('is_admin'))
                    <a href="{{ route('admin.dashboard') }}" class="drawer-link">
                        <i data-lucide="layout-dashboard" style="width:18px; height:18px;"></i>
                        <span>Dashboard Pengelola</span>
                    </a>
                @else
                    <a href="{{ route('admin.login') }}" class="drawer-link">
                        <i data-lucide="lock" style="width:18px; height:18px;"></i>
                        <span>Login Petugas Desa</span>
                    </a>
                @endif
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
                        Sistem informasi dan portal pelayanan publik terpadu Desa Tanjung Mas. Mendorong kemandirian masyarakat berbasis perkebunan kelapa sawit & karet, transparansi anggaran, serta kemudahan akses birokrasi warga.
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
                <div style="display:flex; gap:1.25rem;">
                    <a href="{{ route('admin.login') }}" style="color:#94a3b8;">Portal Admin</a>
                    <span>&bull;</span>
                    <a href="#top" style="color:#22c55e; font-weight:600;">Kembali ke Atas &uarr;</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();

        // Theme Toggle (Dark/Light Mode)
        const themeBtn = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        
        function setTheme(theme) {
            if (theme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
                themeIcon.setAttribute('data-lucide', 'sun');
            } else {
                document.documentElement.removeAttribute('data-theme');
                themeIcon.setAttribute('data-lucide', 'moon');
            }
            localStorage.setItem('desa_theme', theme);
            lucide.createIcons();
        }

        const savedTheme = localStorage.getItem('desa_theme') || 'light';
        setTheme(savedTheme);

        themeBtn.addEventListener('click', () => {
            const current = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            setTheme(current === 'dark' ? 'light' : 'dark');
        });

        // Mobile Drawer
        const drawer = document.getElementById('mobileDrawer');
        const openBtn = document.getElementById('drawerOpenBtn');
        const closeBtn = document.getElementById('drawerCloseBtn');
        const backdrop = document.getElementById('drawerBackdrop');

        function openDrawer() { drawer.classList.add('open'); }
        function closeDrawer() { drawer.classList.remove('open'); }

        openBtn.addEventListener('click', openDrawer);
        closeBtn.addEventListener('click', closeDrawer);
        backdrop.addEventListener('click', closeDrawer);
    </script>
</body>
</html>