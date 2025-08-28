<!DOCTYPE html>
<html>
<head>
    <title>Crear Rol</title>
</head>
<body>
    <h1>Crear Nuevo Rol</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rol.store') }}" method="POST">
        @csrf
        
        <p>
            <label>Nombre del Rol:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </p>

        <p>
            <button type="submit">Guardar Categoría</button>
            <a href="{{ route('rol.index') }}">Cancelar</a>
        </p>
    </form>

    <hr>
    
    <h3>Roles Sugeridos:</h3>
    <ul>
        <li>Jefe</li>
        <li>Administrador</li>
        <li>Vendedor</li>
        <li>Usuario</li>
        <li>Cliente</li>
    </ul>
</body>
</html>