@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Captura de Libros</div>

                <div class="card-body">
                    @if(isset($libro))
                      {!! Form::model($libro, ['route' => ['libro.update', $libro->id], 'method' => 'PATCH']) !!}
                    @else
                      {!! Form::open(['route' => 'libro.store']) !!}
                    @endif
                      <div class="form-group">
                          {!! Form::label('titulo', 'Titulo del libro') !!}
                          {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                      </div>
                        <div class="form-group">
                            {!! Form::label('autor', 'Autor del libro') !!}
                            {!! Form::text('autor', null, ['class' => 'form-control']) !!}
                        </div>
                      <div class="form-group">
                          {!! Form::label('estudiante_id[]', 'Estudiantes') !!}
                          {!! Form::select('estudiante_id[]', $estudiantes, $prestamos ?? null, ['class' => 'form-control', 'multiple']) !!}
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                      <a href="{{ route('libro.index') }}" class="btn btn-primary">Regresar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
