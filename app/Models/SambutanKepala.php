<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SambutanKepala extends Model
{
    //
    protected $table = 'sambutan_kepala';
    protected $fillable = ['nama','konten','gambar'];

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
