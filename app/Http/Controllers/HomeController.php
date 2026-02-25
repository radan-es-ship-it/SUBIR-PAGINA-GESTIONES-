<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $servicios = Servicio::activo()->ordenado()->limit(6)->get();

        return view('home', compact('servicios'));
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function clientes()
    {
        return view('clientes');
    }

    public function seguimiento()
    {
        return view('seguimiento');
    }
}
