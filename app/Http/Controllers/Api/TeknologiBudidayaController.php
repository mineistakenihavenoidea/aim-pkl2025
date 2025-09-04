<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TeknologiBudidaya;
use Illuminate\Http\Request;

class TeknologiBudidayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return TeknologiBudidaya::get();
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
        return$teknologibudidaya;
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
}
