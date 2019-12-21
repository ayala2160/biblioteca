<?php

namespace App\Http\Controllers;

use App\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadoras = Computadora::all();
        return view('computadoras.computadoraIndex', compact('computadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computadoras.computadoraForm');
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
          'marca' => 'required|string|min:2|max:255',
          'modelo_pc' => 'required|string|min:3|max:255',
        ]);

        Computadora::create($request->all());
        return redirect()->route('computadora.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function show(Computadora $computadora)
    {
        return view('computadoras.computadoraShow', compact('computadora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Computadora $computadora)
    {
        return view('computadoras.computadoraForm', compact('computadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computadora $computadora)
    {
        $request->validate([
          'marca' => 'required|string|min:2|max:255',
          'modelo_pc' => 'required|string|min:3|max:255',
        ]);

        $computadora->marca = $request->marca;
        $computadora->modelo_pc = $request->modelo_pc;
        $computadora->save();

        return redirect()->route('computadora.show', $computadora->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect()->route('computadora.index');
    }
}
