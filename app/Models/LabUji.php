<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabUji extends Model
{
    //
    protected $table = 'lab_uji';
    
    protected $fillable = ['konten'];

    public function getCoverPathAttribute(): ?string
    {
        $m = $this->cover()->first() ?: $this->media()->first(); // fallback to first media
        return $m?->file_path
            ? asset('storage/' . $m->file_path) // turn into full URL
            : null;
    }
}
