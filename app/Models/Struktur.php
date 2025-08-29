<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

class Struktur extends Model
{
    //
    protected $table = 'struktur';
    protected $fillable = ['nama','gambar'];

    public function category()
    {
        return $this->belongsTo(Jabatan::class, 'id');
    }



}
