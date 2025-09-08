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
        return Agenda::latest()->paginate(10);
    }

    // GET /api/agendas/{id}

    // POST /api/agendas

    // PUT /api/agendas/{id}

    // DELETE /api/agendas/{id}

}
