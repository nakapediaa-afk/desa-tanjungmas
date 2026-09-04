<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\ApbdesController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik.index');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/apbdes', [ApbdesController::class, 'index'])->name('apbdes.index');
Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm.index');

// Admin Routes
Route::get('/admin/login', [AdminController::class, 'loginView'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginSubmit'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::post('/admin/stats', [AdminController::class, 'updateStats'])->name('admin.stats.update');

Route::post('/admin/berita', [AdminController::class, 'storeBerita'])->name('admin.berita.store');
Route::delete('/admin/berita/{id}', [AdminController::class, 'destroyBerita'])->name('admin.berita.destroy');

Route::post('/admin/umkm', [AdminController::class, 'storeUmkm'])->name('admin.umkm.store');
Route::delete('/admin/umkm/{id}', [AdminController::class, 'destroyUmkm'])->name('admin.umkm.destroy');
