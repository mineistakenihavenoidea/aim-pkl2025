<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FormPertanyaan;
use Illuminate\Http\Request;

class FormPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'kontak' => 'required|string',
            'subjek' => 'required|string',
            'pertanyaan' => 'required|string',
        ]);

    return Feedback::create($data);

    }

    /**
     * Display the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
}
