@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de equipos</div>

                <div class="card-body">
                    @if(isset($computadora))
                      {!! Form::model($computadora, ['route' => ['computadora.update', $computadora->id], 'method' => 'PATCH']) !!}
                    @else
                      {!! Form::open(['route' => 'computadora.store']) !!}
                    @endif
                      @csrf
                      <div class="form-group">
                        {!! Form::label('marca', 'Marca') !!}
                        {!! Form::text('marca', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('modelo', 'Modelo') !!}
                        {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                      <a href="{{ route('computadora.index') }}" class="btn btn-primary">Regresar</a>
                      {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
