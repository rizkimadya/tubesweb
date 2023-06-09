<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_ujian',
        'nama_peserta',
        'jumlah_benar',
        'jumlah_salah',
        'nilai',
        'jawaban',
    ];

    protected $casts = [
        'jawaban' => 'array',
    ];
}
