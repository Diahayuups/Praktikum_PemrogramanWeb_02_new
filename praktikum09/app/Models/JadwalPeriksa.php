<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPeriksa extends Model
{
    use HasFactory;
    // Nama tabel yang digunakan
    protected $table = 'jadwal_periksas';

    // Kolom yang dapat diisi
    protected $fillable = [
        'tgl',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'id_pasien',
        'id_dokter',
    ];
}
