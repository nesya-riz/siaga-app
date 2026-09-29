@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1>Beranda</h1>
    <p class="page-sub">Ringkasan hari ini</p>

    <div class="cards-row">
        <div class="summary-card">
            <div class="label">Siswa aktif</div>
            <div class="value">{{ $totalSiswaAktif }}</div>
        </div>
    </div>

    <p class="page-sub">Kartu "Hadir hari ini", "Konsumsi tercatat", dan tombol pintasan Absensi/Konsumsi Makan menyusul di Phase 3 &amp; 4.</p>
@endsection
