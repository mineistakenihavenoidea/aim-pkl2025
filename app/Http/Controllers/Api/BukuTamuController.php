<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return BukuTamu::latest()->paginate(3);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'      => 'required|string|max:255',
            'nomor'     => 'required|numeric',
            'pekerjaan' => 'nullable|string',
            'instansi'  => 'nullable|string|max:255',
            'layanan'   => 'nullable|string',
            'pegawai'   => 'required|exists:pegawai,id',
            'tujuan'    => 'nullable|string|max:255',
            'topik'     => 'nullable|string|max:255',
        ]);

        // Automatically set today's date
        $data['created_at'] = Carbon::now();

        // Save record
        $model = BukuTamu::create($data);

        return response()->json($model, 201);
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
    

    public function printSingle($id)
    {
        $tamu = BukuTamu::findOrFail($id);

        $pdf = Pdf::loadView('pdf.print', compact('tamu'))
                ->setPaper('A4', 'portrait');

        // Stream PDF so browser can open/print directly
        $filename = 'print_' . preg_replace('/\s+/', '_', $tamu->nama) . '.pdf';

        return $pdf->stream($filename);

    }

}
