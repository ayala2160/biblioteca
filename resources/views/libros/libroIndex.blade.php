@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de libros</div>

                <div class="card-body">
                <table class="table">
                  <tr>
                    <th>Libro</th>
                    <th>Estudiantes</th>
                  </tr>
                  @foreach($libros as $libro)
                    <tr>
                      <td>{{ $libro->titulo }}</td>
                      <td>
                        <ul>
                        @foreach($libro->estudiantes as $estudiante)
                          <li>{{ $estudiante->nombre }}</li>
                        @endforeach
                        </ul>
                      </td>
                    </tr>
                  @endforeach
                </table>
                <a href="{{ route('libro.create') }}" class="btn btn-primary">Agregar libro</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
