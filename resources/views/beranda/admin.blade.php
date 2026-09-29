@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1>Beranda</h1>
    <p class="page-sub">Ringkasan data sekolah</p>

    <div class="cards-row">
        <div class="summary-card">
            <div class="label">Total siswa</div>
            <div class="value">{{ $totalSiswa }}</div>
        </div>
        <div class="summary-card">
            <div class="label">Total guru</div>
            <div class="value">{{ $totalGuru }}</div>
        </div>
        <div class="summary-card">
            <div class="label">Total kelas</div>
            <div class="value">{{ $totalKelas }}</div>
        </div>
    </div>

    <p class="page-sub">Menu Akun Guru, Data Kelas, Data Siswa, dan Rekap menyusul di Phase 2 &amp; 4.</p>
@endsection
