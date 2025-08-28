<!DOCTYPE html>
<html>
<head>
    <title>Categorías</title>
</head>
<body>
    <h1>Lista de Categorías</h1>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('category.create') }}">Crear Nueva Categoría</a>
    
    <br><br>

    @if($categories->count() > 0)
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Creación</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No hay categorías registradas.</p>
        <a href="{{ route('category.create') }}">Crear la primera categoría</a>
    @endif
</body>
</html>