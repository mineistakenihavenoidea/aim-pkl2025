<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SambutanKepala extends Model
{
    //
    protected $table = 'sambutan_kepala';
    protected $fillable = ['nama','konten','gambar'];
}
