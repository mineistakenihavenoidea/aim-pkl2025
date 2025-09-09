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

    public function getCoverPathAttribute(): ?string
    {
        $m = $this->cover()->first() ?: $this->media()->first(); // fallback to first media
        return $m?->file_path
            ? asset('storage/' . $m->file_path) // turn into full URL
            : null;
    }



}
