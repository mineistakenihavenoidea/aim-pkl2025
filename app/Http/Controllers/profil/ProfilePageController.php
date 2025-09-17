<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilePageController extends Controller
{
    public function index()
    {
        // ini akan me-render file resources/views/profile.blade.php
        return view('profile');
    }
}
