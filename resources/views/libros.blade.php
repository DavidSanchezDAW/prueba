<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
</head>
<body>
    {{-- @forelse ($libros as $libro)
        @if($loop->first)
            <h1>Lista de libros</h1>
            <ul>
        @endif
        <li>{{ $libro['titulo']. " (".$libro['autor'].")" }}</li>
        @if($loop->last)
            </ul>
        @endif
    @empty
        <p>No hay libros</p>
    @endforelse --}}
    @each('partials.fichalibro', $libros, 'libro')
</body>
</html>
