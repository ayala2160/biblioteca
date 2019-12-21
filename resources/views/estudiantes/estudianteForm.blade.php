@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de estudiantes</div>

                <div class="card-body">
                    <!-- Código que muestra errores -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(isset($estudiante))
                      {!! Form::model($estudiante, ['route' => ['estudiante.update', $estudiante->id], 'method' => 'PATCH']) !!}
                    @else
                      {!! Form::open(['route' => 'estudiante.store']) !!}
                    @endif
                      @csrf
                      <div class="form-group">
                        {!! Form::label('nombre', 'Nombre del estudiante') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('codigo', 'Codigo del estudiante') !!}
                        {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('correo', 'Correo del estudiante') !!}
                        {!! Form::email('correo', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('fecha_nacimiento', 'fecha de nacimiento') !!}
                        {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('computadora_id', 'Selecciona una computadora') !!}
                        {!! Form::select('computadora_id', $computadoras, null, ['class' => 'form-control']) !!}
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
