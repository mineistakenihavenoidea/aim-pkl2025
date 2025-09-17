<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormPertanyaan extends Model
{
    //
    protected $table = 'form_pertanyaan';
    protected $fillable = ['nama','kontak','pertanyaan','subjek'];
}
