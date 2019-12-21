@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles</div>

                <div class="card-body">
                  <a href="{{ route('computadora.index') }}" class="btn btn-default btn-sm">Listado de computadoras</a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marca</th>
                          <th>Modelo</th>
                          <th colspan="2"><center>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $computadora->id }}</td>
                            <td>{{ $computadora->marca }}</td>
                            <td>{{ $computadora->modelo_pc }}</td>
                            <td>
                              <center><a href="{{ route('computadora.edit', $computadora->id) }}" class="btn btn-sm btn-warning">Editar</a></center>
                            </td>
                            <td>
                              <form action="{{ route('computadora.destroy', $computadora->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <center><button type="submit" class="btn btn-sm btn-danger">Eliminar</button></center>
                              </form>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                    <a href="{{ route('computadora.index') }}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
