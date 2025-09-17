<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    //
    protected $table = 'magang';
    protected $fillable = ['lembaga','jumlah_orang','mulai','selesai'];
}
