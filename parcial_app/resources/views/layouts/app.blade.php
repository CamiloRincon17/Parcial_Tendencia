<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Parcial Tendencias')</title>

</head>
<body>
    <nav>
        <a href="{{ route('inicio') }}">Inicio </a>
        <a href="{{ url('/calculadora') }}">Calculadora</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        Parcial 1 tendencias en ingeniería de Sistemas Laravel &mdash; Todos los derechos reservados &copy; 2026
    </footer>
</body>
</html>
