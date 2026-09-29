<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SIAGA</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-card">
            <h1>SIAGA</h1>
            <p class="subtitle">Sistem Informasi Absensi dan Gizi Anak</p>
            <h2>Masuk ke akun Anda</h2>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required autofocus>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="btn">Masuk</button>
            </form>

            <p class="link-row">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
        </div>
    </div>
</body>
</html>
