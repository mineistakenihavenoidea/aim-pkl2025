<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    //
    protected $table = 'kerjasama';
    protected $fillable = ['nama','lembaga','jenis','mulai','selesai'];
}
