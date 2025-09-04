<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LabUji;
use Illuminate\Http\Request;

class LabUjiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return labUji::get();
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return$labuji;
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
}
