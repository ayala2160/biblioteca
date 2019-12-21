<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Computadora;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadoras = Computadora::pluck('marca', 'id');
        return view('estudiantes.estudianteForm', compact('computadoras'));

        $computadoras = Computadora::pluck('modelo_pc', 'id');
        return view('estudiantes.estudianteForm', compact('computadoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|integer|min:1',
            'correo' => 'required|email|unique:estudiantes,correo',
            'computadora_id' => 'required|integer|min:1',
        ]);
        //Estudiante::create($request->all());
        $estudiante = new Estudiante([
              'nombre' => $request->nombre,
              'codigo' => $request->codigo,
              'correo' => $request->correo,
              'fecha_nacimiento' => $request->fecha_nacimiento,
            ]
        );
        $marca = Computadora::find($request->computadora_id);
        $marca->estudiantes()->save($estudiante);

        return redirect()->route('estudiante.show', $estudiante->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.estudianteShow', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
