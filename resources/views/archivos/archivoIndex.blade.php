<div class="card">
    <div class="card-header">Archivos cargados</div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Archivo</th>
                <th>Tamaño</th>
                <th colspan="2"><center>Acciones</center></th>
            </tr>
            @foreach($archivos as $archivo)
                <tr>
                    <td>{{ $archivo->original }}</td>
                    <td>{{ $archivo->tamaño }}</td>
                    <td>
                        <a href="{{ route('archivo.download', $archivo->id) }}" class="btn btn-sm btn-success">Descargar</a>
                    </td>
                    <td>
                        {!! Form::open(['route' => ['archivo.delete', $archivo->id]]) !!}
                            <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('libro.index') }}" class="btn btn-primary">Regresar</a>
    </div>
</div>
