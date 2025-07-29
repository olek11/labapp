@extends('layouts.app')

@section('title', 'Selamat Datang di Laboratorium Digital')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <h1 class="display-4 fw-bold text-primary">Laboratorium Digital</h1>
                <p class="lead text-muted">Akses publik untuk melihat daftar alat, bahan, dan ruangan. Pengajuan peminjaman tersedia untuk pengguna terdaftar.</p>

                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Login untuk Peminjaman</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg mt-3 ms-2">Daftar Akun</a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg mt-3">Masuk ke Dashboard</a>
                @endguest
            </div>

            <div class="col-md-6 text-center">
                <img src="#" alt="Ilustrasi Laboratorium" class="img-fluid" style="max-height: 300px;">
            </div>
        </div>

        <hr class="my-5">

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold text-primary">Daftar Alat</h5>
                <p class="text-muted">Temukan alat laboratorium yang tersedia lengkap dengan kategori dan jumlah.</p>
                <a href="#" class="btn btn-outline-secondary">Lihat Alat</a>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold text-primary">Daftar Bahan</h5>
                <p class="text-muted">Lihat bahan kimia dan material lain yang digunakan di laboratorium.</p>
                <a href="#" class="btn btn-outline-secondary">Lihat Bahan</a>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold text-primary">Ruangan</h5>
                <p class="text-muted">Informasi pemakaian dan status ketersediaan ruangan laboratorium.</p>
                <a href="#" class="btn btn-outline-secondary">Lihat Ruangan</a>
            </div>
        </div>
    </div>
@endsection
