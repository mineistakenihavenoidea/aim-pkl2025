<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    //
    protected $table = 'buku_tamu';

        protected $fillable = [
        'tanggal',
        'nama',
        'keperluan',
        'user_id',
    ];

}
