<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    protected $table = 'buku_tamu';

    protected $fillable = [
        'pekerjaan',
        'nama',
        'nomor',
        'created_at',
        'instansi',
        'layanan',
        'pegawai', 
        'tujuan',
        'topik',
    ];


}

