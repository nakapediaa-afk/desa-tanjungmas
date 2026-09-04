@extends('layouts.app')

@section('title', 'Login Admin Desa')

@section('content')
<div class="container" style="padding-top: 5rem; padding-bottom: 5rem; max-width: 450px;">
    <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2.5rem; text-align: center;">
        <div style="width:60px; height:60px; background:var(--primary-light); color:var(--primary); border-radius:50%; display:flex; align-items:center; justify-content:center; margin: 0 auto 1.5rem auto;">
            <i data-lucide="lock" style="width: 28px; height: 28px;"></i>
        </div>
        <h2 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem;">Login Pengelola Desa</h2>
        <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 2rem;">Masukkan PIN / Password Admin untuk masuk ke Dashboard</p>

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div style="margin-bottom: 1.5rem; text-align: left;">
                <label style="font-size: 0.85rem; font-weight: 600; display: block; margin-bottom: 0.4rem;">PIN / Password Admin</label>
                <input type="password" name="password" placeholder="Masukkan PIN (default: admin123)" required style="width: 100%; padding: 0.75rem 1rem; border-radius: var(--radius-md); border: 1px solid var(--border); background: var(--bg-main); color: var(--text-main);">
            </div>
            <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; padding: 0.85rem;">
                Masuk ke Dashboard
            </button>
        </form>
    </div>
</div>
@endsection
