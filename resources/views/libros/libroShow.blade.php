@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información del libro</div>

                <div class="card-body">
                <h3>Libro: {{ $libro->titulo }}</h3>
                <ul>
                  @foreach($libro->estudiantes as $estudiante)
                    <li>{{ $estudiante->nombre }}</li>
                  @endforeach
                </ul>
                <a href="{{ route('libro.create') }}" class="btn btn-primary">Agregar libro</a>
                </div>
            </div>
            @include('archivos.archivoForm', ['modelo_id' => $libro->id, 'modelo_type' => 'App\Libro'])
            @include('archivos.archivoIndex', ['archivos' => $libro->archivos])
        </div>
    </div>
</div>
@endsection
