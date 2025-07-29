<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Sistem Laboratorium Digital - Informasi alat, bahan, ruangan, dan pengajuan peminjaman">
    <meta name="keywords" content="Laboratorium, Laravel, Peminjaman, Alat, Ruangan, Bahan, Digital">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laboratorium Digital')</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Custom Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8fafc;
        }
        .hero-section {
            background: linear-gradient(to right, #1e3a8a, #2563eb);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }
        .footer {
            background-color: #1f2937;
            color: white;
            text-align: center;
            padding: 30px 10px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1 class="display-5 fw-bold">Laboratorium Digital</h1>
        <p class="lead">Akses informasi alat, bahan, dan ruangan secara publik</p>
        @guest
            <a href="{{ route('login') }}" class="btn btn-light btn-lg mt-3">Login untuk Peminjaman</a>
        @endguest
    </div>

    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Flash Message -->
    @include('layouts.flash-message')

    <!-- Content Section -->
    <div class="container mt-5 mb-5">
        @isset($header)
            <div class="mb-4">
                <h2>{{ $header }}</h2>
            </div>
        @endisset

        <main>
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© {{ date('Y') }} Laboratorium Digital | Built with Laravel & Bootstrap</p>
    </div>
</body>
</html>
