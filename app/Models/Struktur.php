<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

class Struktur extends Model
{
    //
    protected $table = 'struktur';
    protected $fillable = ['nama','gambar','jabatan','kode'];

    protected $appends = ['gambar_url'];

    public function getGambarUrlAttribute()
    {
        if (!$this->gambar) return null;

        if (preg_match('/^https?:\/\//i', $this->gambar)) {
            return $this->gambar;
        }

        return asset('storage/' . ltrim($this->gambar, '/'));
    }

    protected $hidden = ['gambar'];

}
