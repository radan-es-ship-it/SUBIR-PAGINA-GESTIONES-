<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::activo()->ordenado()->get();

        return view('servicios.index', compact('servicios'));
    }

    public function show($id)
    {
        $servicio = Servicio::where('activo', true)->findOrFail($id);
        $serviciosRelacionados = Servicio::activo()
            ->where('id', '!=', $id)
            ->ordenado()
            ->limit(3)
            ->get();

        // Criar slug del título para buscar vista específica
        $slug = \Illuminate\Support\Str::slug($servicio->titulo);
        $viewPath = "DETALLE_SERVICIOS.{$slug}";

        // Usiar vista específica si existe, sino la genérica
        $view = view()->exists($viewPath) ? $viewPath : 'servicios.show';

        return view($view, compact('servicio', 'serviciosRelacionados'));
    }
}
