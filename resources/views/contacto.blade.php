@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacto</div>

                <div class="card-body">
                    <form action="{{ route('guardar') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="correo">Escribe tu correo</label>
                            <input type="email" name="correo" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="yo@ejemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="comentario">Escribe tu comentario</label>
                            <textarea name="comentario" class="form-control" id="comentario" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
