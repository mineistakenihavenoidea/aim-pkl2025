<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    // GET /api/agendas
    public function index()
    {
        return Agenda::latest()->get();
    }

    // GET /api/agendas/{id}
    public function show(Agenda $agenda)
    {
        return $agenda;
    }

    // POST /api/agendas
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        return Agenda::create($data);
    }

    // PUT /api/agendas/{id}
    public function update(Request $request, Agenda $agenda)
    {
        $data = $request->validate([
            'judul' => 'sometimes|string|max:255',
            'konten' => 'sometimes|string',
            'tanggal' => 'sometimes|date',
        ]);

        $agenda->update($data);

        return $agenda;
    }

    // DELETE /api/agendas/{id}
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return response()->json(['message' => 'Agenda deleted']);
    }
}
