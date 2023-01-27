<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="/css/css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    @include('partials.nav')
    <main>
    @yield('contenido')
    </main>
    @include('partials.pie')
</body>
</html>
