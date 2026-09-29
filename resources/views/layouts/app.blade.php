<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIAGA - @yield('title', 'Beranda')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar">
            <p class="brand">SIAGA</p>
            <p class="brand-sub">Absensi dan gizi anak</p>

            <nav>
                @if (auth()->user()->isAdmin())
                    <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
                    {{-- Menu di bawah ini menyusul di Phase 2 --}}
                    <a href="#">Akun Guru</a>
                    <a href="#">Data Kelas</a>
                    <a href="#">Data Siswa</a>
                    <a href="#">Rekap</a>
                @else
                    <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
                    {{-- Menu di bawah ini menyusul di Phase 3 dan 4 --}}
                    <a href="#">Absensi</a>
                    <a href="#">Konsumsi Makan</a>
                    <a href="#">Rekap</a>
                @endif
            </nav>

            <div class="user-card">
                <div class="name">{{ auth()->user()->nama }}</div>
                <div class="role">{{ ucfirst(auth()->user()->role) }}</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </aside>

        <main class="main">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
