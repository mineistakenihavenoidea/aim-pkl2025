<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Narasumber;
use Illuminate\Http\Request;

class NarasumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Narasumber::get();
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
        $narasumber = Narasumber::findOrFail($id);
        return$narasumber;
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
}
