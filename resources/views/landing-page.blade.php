@extends('layouts.app')

@section('content')
<!-- Inicia contenido de vista -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenid@</div>

                <div class="card-body">
                   Hola {{ $nombre }} {{ $apellido ?? 'No Inidcó Apellido' }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Termina contenido de vista -->
@endsection
