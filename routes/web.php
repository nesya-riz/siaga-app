<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

// Halaman awal -> arahkan ke beranda.
// Kalau belum login, middleware 'auth' otomatis melempar ke halaman login.
Route::get('/', function () {
    return redirect()->route('beranda');
});

// ---------- Guest (belum login) ----------
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// ---------- Sudah login (semua role) ----------
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
});

// ---------- Khusus Admin (contoh, dipakai nanti di Phase 2) ----------
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::resource('kelas', KelasController::class);
//     Route::resource('siswa', SiswaController::class);
//     Route::resource('akun-guru', AkunGuruController::class);
// });

// ---------- Khusus Guru (contoh, dipakai nanti di Phase 3) ----------
// Route::middleware(['auth', 'role:guru'])->group(function () {
//     Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
//     Route::get('/konsumsi-makan', [KonsumsiMakanController::class, 'index'])->name('konsumsi.index');
// });
