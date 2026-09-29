<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class KelasSiswaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'Kelas 1' => [
                ['nama' => 'Nadia Putri', 'jenis_kelamin' => 'P'],
                ['nama' => 'Rafi Pratama', 'jenis_kelamin' => 'L'],
                ['nama' => 'Salsa Amelia', 'jenis_kelamin' => 'P'],
                ['nama' => 'Fajar Ramadhan', 'jenis_kelamin' => 'L'],
            ],
            'Kelas 2' => [
                ['nama' => 'Keisha Anindya', 'jenis_kelamin' => 'P'],
                ['nama' => 'Bima Saputra', 'jenis_kelamin' => 'L'],
                ['nama' => 'Citra Lestari', 'jenis_kelamin' => 'P'],
            ],
            'Kelas 3' => [
                ['nama' => 'Dimas Arya', 'jenis_kelamin' => 'L'],
                ['nama' => 'Erika Wulandari', 'jenis_kelamin' => 'P'],
                ['nama' => 'Fauzan Akbar', 'jenis_kelamin' => 'L'],
                ['nama' => 'Gita Permata', 'jenis_kelamin' => 'P'],
            ],
            'Kelas 4' => [
                ['nama' => 'Hilman Nugraha', 'jenis_kelamin' => 'L'],
                ['nama' => 'Intan Sari', 'jenis_kelamin' => 'P'],
                ['nama' => 'Joko Susilo', 'jenis_kelamin' => 'L'],
                ['nama' => 'Kirana Ayu', 'jenis_kelamin' => 'P'],
            ],
            'Kelas 5' => [
                ['nama' => 'Lutfi Hakim', 'jenis_kelamin' => 'L'],
                ['nama' => 'Maya Anggraini', 'jenis_kelamin' => 'P'],
                ['nama' => 'Naufal Ridho', 'jenis_kelamin' => 'L'],
            ],
            'Kelas 6' => [
                ['nama' => 'Olivia Zahra', 'jenis_kelamin' => 'P'],
                ['nama' => 'Putra Wijaya', 'jenis_kelamin' => 'L'],
                ['nama' => 'Queenara Dewi', 'jenis_kelamin' => 'P'],
                ['nama' => 'Rendra Firmansyah', 'jenis_kelamin' => 'L'],
            ],
        ];

        foreach ($data as $namaKelas => $siswaList) {
            $kelas = Kelas::firstOrCreate(['nama_kelas' => $namaKelas]);

            foreach ($siswaList as $siswa) {
                Siswa::firstOrCreate(
                    ['nama' => $siswa['nama'], 'kelas_id' => $kelas->id],
                    ['jenis_kelamin' => $siswa['jenis_kelamin'], 'aktif' => true]
                );
            }
        }
    }
}
