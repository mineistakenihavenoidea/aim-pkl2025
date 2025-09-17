<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VarietasUnggul extends Model
{
    //
    protected $table = 'varietas_unggul';
    protected $fillable = ['nama_varietas','gambar','informasi'];
}
