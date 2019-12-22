<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <h2>Devoluciones</h2>

    <p>Estimando(a) {{ $libro->user->name }}</p>
    <p>
        Se le notifica que el plazo para devolver el ejemplar <b>{{ $libro->titulo }}</b>
        ha expirado.
    </p>
</body>
</html>
