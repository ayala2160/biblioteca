@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de equipos</div>

                <div class="card-body">
                    <form action="{{ route('computadora.store') }}" method="POST">
                    @if(isset($computadora))
                      <form action="{{ route('computadora.update', $computadora->id) }}" method="POST">
                      <input type="hidden" name="_method" value="PATCH">
                    @else
                      <form action="{{ route('computadora.store') }}" method="POST">
                    @endif
                      @csrf
                      <div class="form-group">
                          <label for="marca">Marca</label>
                          <input type="text" name="marca" value="{{ $computadora->marca ?? '' }}" class="form-control" id="programa">
                      </div>
                      <div class="form-group">
                          <label for="modelo">Modelo</label>
                          <input type="text" name="modelo" value="{{ $computadora->modelo ?? '' }}" class="form-control" id="clave">
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                      <a href="{{ route('computadora.index') }}" class="btn btn-primary">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
