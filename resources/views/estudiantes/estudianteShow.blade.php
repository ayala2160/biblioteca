@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Codigo</th>
                          <th>Correo</th>
                          <th>Fecha de nacimiento</th>
                          <th colspan="2">Computadora</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $estudiante->id }}</td>
                            <td>{{ $estudiante->nombre }}</td>
                            <td>{{ $estudiante->codigo }}</td>
                            <td>{{ $estudiante->correo }}</td>
                            <td>{{ $estudiante->fecha_nacimiento->format('d/m/Y') }}</td>
                            <td>{{ $estudiante->equipos->marca }}</td>
                            <td>{{ $estudiante->equipos->modelo }}</td>
                          </tr>
                      </tbody>
                    </table>
                    <a href="{{ route('estudiante.create') }}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
