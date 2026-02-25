<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('contacto', compact('servicios'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'empresa' => 'nullable|string|max:255',
            'asunto' => 'required|string|max:255',
            'servicio_id' => 'nullable|exists:servicios,id',
            'mensaje' => 'required|string'
        ]);

        Contacto::create($validated);

        return redirect()->route('contacto.index')
            ->with('success', '¡Gracias por contactarnos! Te responderemos a la brevedad.');
    }
}
