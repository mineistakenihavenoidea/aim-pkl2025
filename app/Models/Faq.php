<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs'; // Name of your existing table
    protected $fillable = ['pertanyaan', 'jawaban', 'created_at', 'updated_at'];//
}
