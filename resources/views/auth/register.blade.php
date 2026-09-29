<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar - SIAGA</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-card">
            <h1>SIAGA</h1>
            <p class="subtitle">Sistem Informasi Absensi dan Gizi Anak</p>
            <h2>Daftar akun Guru</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required autofocus>
                    @error('nama')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required>
                    @error('email')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')<div class="error">{{ $message }}</div>@enderror
                </div>

                <div class="field">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn">Daftar</button>
            </form>

            <p class="link-row">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
        </div>
    </div>
</body>
</html>
