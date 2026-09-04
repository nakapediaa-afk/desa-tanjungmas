@extends('layouts.app')

@section('title', 'Layanan Surat Online')
@section('meta_desc', 'Prosedur dan persyaratan pengurusan surat administrasi di Kantor Desa Tanjung Mas: SKU Usaha/Kebun, SKTM, Pengantar SKCK, dan Keterangan Domisili.')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="breadcrumbs">
            <a href="{{ route('home') }}">Beranda</a>
            <span>/</span>
            <span>Layanan Surat</span>
        </div>
        <h1 class="page-title">Pelayanan Administrasi &amp; Surat Warga</h1>
        <p class="page-desc">
            Panduan lengkap dokumen persyaratan untuk pengajuan surat keterangan resmi di Kantor Desa Tanjung Mas. Hubungi petugas desa melalui WhatsApp untuk konsultasi berkas.
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="layanan-wrapper">
            <div>
                <!-- SKU -->
                <div class="layanan-item">
                    <div class="layanan-header">
                        <div class="layanan-icon"><i data-lucide="briefcase"></i></div>
                        <div>
                            <h2 class="layanan-title">Surat Keterangan Usaha (SKU) Kebun &amp; Dagang</h2>
                            <div style="font-size:0.85rem; color:var(--text-muted);">Diperlukan untuk pengajuan kredit usaha perbankan, kemitraan sawit, atau izin usaha.</div>
                        </div>
                    </div>
                    <div style="font-weight:700; font-size:0.85rem; text-transform:uppercase; margin-bottom:0.75rem; color:var(--text-heading);">Persyaratan Dokumen:</div>
                    <div class="syarat-list">
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Fotokopi KTP Pemohon (1 Lembar)</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Fotokopi Kartu Keluarga (KK)</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Surat Pengantar RT / Kepala Dusun</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Bukti Kepemilikan Lahan / Foto Usaha</span></div>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Petugas%20Desa%20Tanjung%20Mas,%20saya%20ingin%20mengajukan%20Surat%20Keterangan%20Usaha%20(SKU)" target="_blank" class="btn btn-primary btn-sm">
                        <i data-lucide="message-circle" style="width:16px; height:16px;"></i> Ajukan via WhatsApp
                    </a>
                </div>

                <!-- SKTM -->
                <div class="layanan-item">
                    <div class="layanan-header">
                        <div class="layanan-icon" style="background:#fef3c7; color:#d97706;"><i data-lucide="heart-handshake"></i></div>
                        <div>
                            <h2 class="layanan-title">Surat Keterangan Tidak Mampu (SKTM)</h2>
                            <div style="font-size:0.85rem; color:var(--text-muted);">Untuk beasiswa anak sekolah/kuliah, bantuan BPJS PBI, dan bantuan sosial pemerintah.</div>
                        </div>
                    </div>
                    <div style="font-weight:700; font-size:0.85rem; text-transform:uppercase; margin-bottom:0.75rem; color:var(--text-heading);">Persyaratan Dokumen:</div>
                    <div class="syarat-list">
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Fotokopi KTP Orang Tua &amp; Siswa</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Fotokopi Kartu Keluarga (KK)</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Surat Pengantar RT setempat</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Surat Pernyataan Tidak Mampu bermaterai</span></div>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Petugas%20Desa%20Tanjung%20Mas,%20saya%20ingin%20mengajukan%20SKTM" target="_blank" class="btn btn-primary btn-sm">
                        <i data-lucide="message-circle" style="width:16px; height:16px;"></i> Ajukan via WhatsApp
                    </a>
                </div>

                <!-- SKCK -->
                <div class="layanan-item">
                    <div class="layanan-header">
                        <div class="layanan-icon" style="background:#e0f2fe; color:#0284c7;"><i data-lucide="shield"></i></div>
                        <div>
                            <h2 class="layanan-title">Pengantar Surat Keterangan Catatan Kepolisian (SKCK)</h2>
                            <div style="font-size:0.85rem; color:var(--text-muted);">Surat pengantar dari desa untuk penerbitan SKCK di Polsek Kampar Kiri.</div>
                        </div>
                    </div>
                    <div style="font-weight:700; font-size:0.85rem; text-transform:uppercase; margin-bottom:0.75rem; color:var(--text-heading);">Persyaratan Dokumen:</div>
                    <div class="syarat-list">
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Fotokopi KTP &amp; KK</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Fotokopi Akta Lahir / Ijazah Terakhir</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Pas Foto 4x6 latar merah (3 lembar)</span></div>
                        <div class="syarat-item"><i data-lucide="check-circle-2"></i> <span>Surat Pengantar RT / Dusun</span></div>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20Petugas%20Desa%20Tanjung%20Mas,%20saya%20ingin%20membuat%20Pengantar%20SKCK" target="_blank" class="btn btn-primary btn-sm">
                        <i data-lucide="message-circle" style="width:16px; height:16px;"></i> Ajukan via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Sidebar Info -->
            <aside>
                <div style="background:var(--bg-surface); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.5rem; box-shadow:var(--shadow-sm); margin-bottom:1.5rem;">
                    <h3 style="font-size:1.1rem; margin-bottom:1rem; color:var(--text-heading);">Alur Pelayanan</h3>
                    <ol style="padding-left:1.25rem; font-size:0.88rem; color:var(--text-muted); line-height:1.7;">
                        <li>Lengkapi seluruh dokumen persyaratan dari RT/Dusun.</li>
                        <li>Bawa berkas ke Kantor Desa atau kirim foto dokumen via WhatsApp.</li>
                        <li>Petugas memverifikasi kelengkapan data pemohon.</li>
                        <li>Surat ditandatangani oleh Pj. Kepala Desa / Sekdes.</li>
                        <li>Surat resmi dapat diambil di kantor atau diantar.</li>
                    </ol>
                </div>

                <div style="background:var(--brand-primary); color:#ffffff; border-radius:var(--radius-lg); padding:1.5rem; box-shadow:var(--shadow-md);">
                    <h3 style="font-size:1.1rem; color:#ffffff; margin-bottom:0.5rem;">Pelayanan Tanpa Biaya</h3>
                    <p style="font-size:0.85rem; line-height:1.6; color:#dcfce7; margin-bottom:1rem;">
                        Seluruh pengurusan administrasi surat keterangan warga di Kantor Desa Tanjung Mas adalah <strong>GRATIS (Rp 0)</strong>.
                    </p>
                    <div style="font-size:0.85rem; font-weight:700; display:flex; align-items:center; gap:0.5rem;">
                        <i data-lucide="clock" style="width:16px; height:16px;"></i> Senin - Jumat (Jam Kerja)
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection