<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $table = 'jabatan';

    protected $fillable = ['jabatan', 'kode'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'id');
    }

    protected static function booted()
    {
        static::saving(function ($jabatan) {
            // Example: copy value into another column
            $jabatan->kode = $jabatan->jabatan;
        });
    }


}
