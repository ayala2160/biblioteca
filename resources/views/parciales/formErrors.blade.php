<!--Código que Muestra errores -->>
@if ($errors->any())
<div class="row justify-content-center"> <!-- Agregada para efectos de estilo -->
    <div class="col-8"> <!-- Agregada para efectos de estilo -->

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    </div>
</div>
@endif
