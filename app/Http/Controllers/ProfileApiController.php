<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'aboutUs' => [
                'content' => 'BRMP adalah Balai Riset ...',
            ],
            'organization' => [
                'content' => 'Struktur organisasi BRMP terdiri ...',
                'chartUrl' => 'https://placehold.co/800x600/004d40/ffffff?text=Bagan+Struktur+Organisasi',
            ],
            'head' => [
                'photoUrl' => 'https://placehold.co/100x100/2f80ed/ffffff?text=Foto',
                'name' => 'Nur Aini Herawati, S.Pi, M.Sc.',
                'title' => 'Kepala Balai Penerapan ...',
                'speech' => 'Selamat datang di Anjungan Informasi Mandiri BRMP ...',
            ]
        ]);
    }
}
