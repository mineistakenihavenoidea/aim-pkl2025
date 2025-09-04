<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenyediaanBenih;
use Illuminate\Http\Request;

class PenyediaanBenihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return PenyediaanBenih::get();
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
        return$penyediaanbenih;
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Remove the specified resource from storage.
     */
}
