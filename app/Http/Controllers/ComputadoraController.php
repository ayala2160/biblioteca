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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Computadora $computadora)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computadora $computadora)
    {
        //
    }
}
