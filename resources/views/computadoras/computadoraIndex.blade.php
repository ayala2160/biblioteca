
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Equipos</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marca</th>
                          <th>Modelo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($computadoras as $computadora)
                          <tr>
                            <td>{{ $computadora->id }}</td>
                            <td>{{ $computadora->marca }}</td>
                            <td>{{ $computadora->modelo }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <a href="{{ route('computadora.create') }}" class="btn btn-success btn-sm">Agregar computadora</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
