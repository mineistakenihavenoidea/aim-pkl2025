<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $table = 'feedback'; // Name of your existing table
    protected $fillable = ['rating', 'nama','feedback', 'created_at', 'updated_at'];//
}
