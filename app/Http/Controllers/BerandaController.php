<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            return view('beranda.admin', [
                'totalSiswa' => Siswa::count(),
                'totalGuru' => User::where('role', 'guru')->count(),
                'totalKelas' => Kelas::count(),
            ]);
        }

        // Guru: nanti setelah fitur absensi/konsumsi ada, hitung dari data asli.
        // Untuk sekarang (Phase 1) ditampilkan dulu placeholder sederhana.
        return view('beranda.guru', [
            'totalSiswaAktif' => Siswa::where('aktif', true)->count(),
        ]);
    }
}
