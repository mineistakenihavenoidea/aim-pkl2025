<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;
use App\Models\Media;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class GaleriKegiatan extends Model
{

    protected $table = 'galeri_kegiatan';
    //
    public function media(){
        return $this->morphMany(\App\Models\Media::class, 'mediable');
        return $this->hasMany(\App\Models\Media::class);
    }


    public function cover(): MorphOne
    {
        return $this->morphOne(Media::class, 'mediable')
            ->where('media_type', 'cover');    // If you want a single cover image:
    }

    public function getCoverPathAttribute(): ?string
    {
        $m = $this->cover()->first() ?: $this->media()->first(); // fallback to first media
        return $m?->file_path
            ? asset('storage/' . $m->file_path) // turn into full URL
            : null;
    }

    protected $fillable = [
        'judul',       // Add all the columns you want to be mass assignable
        'info',
        'user_id',
        'media_id',
        'type',
        'media_type',
    ];

    protected static function booted(){
        static::deleting(function ($galerikegiatan) {
            // Delete all related media before deleting berita
            $galerikegiatan->media()->delete();
        });
    }

protected $appends = ['cover_path'];

}
