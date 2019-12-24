<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Libro;
use App\Mail\LibrosDevueltos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::with('estudiantes:id,nombre', 'user')->paginate(10);
        return view('libros.libroIndex', compact('libros'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes = Estudiante::pluck('nombre', 'id');
        return view('libros.libroForm', compact('estudiantes'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Agrega user_id a $request
        $request->merge(['user_id' => \Auth::id()]);
        //Crea un nuevo registro con la información del formulario y el user_id
        $libro = Libro::create($request->all());
        //Relaciona el registro con los estudiantes seleccionados
        $libro->estudiantes()->attach($request->estudiante_id);
        return redirect()->route('libro.show', $libro->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libros.libroShow', compact('libro'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        $estudiantes = Estudiante::pluck('nombre', 'id');
        $prestamos = $libro->estudiantes()->pluck('id');
        return view('libros.libroForm', compact('estudiantes', 'libro', 'prestamos'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->save();
        $libro->estudiantes()->sync($request->estudiante_id);
        return redirect()->route('libro.show', $libro->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }

    public function notificarLibroDevuelto(Libro $libro)
    {
        //Carga los usuarios relacionados con un libro
        $libro->load('user');
        //Envía correo al usuario
        Mail::to($libro->user->email)->send(new LibrosDevueltos($libro));
        return redirect()->route('libro.index');
    }
}
