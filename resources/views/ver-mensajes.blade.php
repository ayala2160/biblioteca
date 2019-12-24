@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de mensajes</div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>Correo</th>
                        <th>Mensaje</th>
                        <th>Enviado</th>
                        </tr>
                    </thead>
                    @foreach($mensajes as $mensaje)
                        <tr>
                        <td>{{ $mensaje->correo }}</td>
                        <td>{{ $mensaje->comentario }}</td>
                        <td>{{ $mensaje->created_at }}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
