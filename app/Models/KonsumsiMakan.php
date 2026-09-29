<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsumsiMakan extends Model
{
    protected $table = 'konsumsi_makan';

    protected $fillable = [
        'siswa_id',
        'user_id',
        'tanggal',
        'status',
        'catatan',
    ];

    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
        ];
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
