<!DOCTYPE html>
<html>
<head>
    <title>roles</title>
</head>
<body>
    <h1>Lista de Roles</h1>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('rol.create') }}">Crear Nuevo rol</a>
    
    <br><br>

    @if($rol->count() > 0)
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Creación</th>
            </tr>
            @foreach($rol as $rol)
                <tr>
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->name }}</td>
                    <td>{{ $rol->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No hay roles registrados.</p>
        <a href="{{ route('rol.create') }}">Crear la primera categoría</a>
    @endif
</body>
</html>