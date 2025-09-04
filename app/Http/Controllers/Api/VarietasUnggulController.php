<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VarietasUnggul;
use Illuminate\Http\Request;

class VarietasUnggulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return VarietasUnggul::get();
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
        return$varietasunggul;
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
}
