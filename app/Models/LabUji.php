<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabUji extends Model
{
    //
    protected $table = 'lab_uji';
    protected $fillable = ['judul','gambar','deskripsi'];
}
