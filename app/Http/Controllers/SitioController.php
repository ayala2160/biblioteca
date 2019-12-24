<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function bienvenida($nombre = null, $apellido = null)
    {
        $nombre = strtoupper($nombre);
        $apellido = strtoupper($apellido);
        return view('landing-page', compact('nombre', 'apellido'));
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function guardaContacto(Request $request)
    {
        //Recibir
        //Validar
        //Guardar
        //Salir
    }
}
