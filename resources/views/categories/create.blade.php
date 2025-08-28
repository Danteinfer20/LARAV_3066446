<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>
</head>
<body>
    <h1>Crear Nueva Categoría</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        
        <p>
            <label>Nombre de la Categoría:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </p>

        <p>
            <button type="submit">Guardar Categoría</button>
            <a href="{{ route('category.index') }}">Cancelar</a>
        </p>
    </form>

    <hr>
    
    <h3>Categorías sugeridas:</h3>
    <ul>
        <li>Arte</li>
        <li>Deporte</li>
        <li>Tecnología</li>
        <li>Pintura</li>
        <li>Dibujo</li>
    </ul>
</body>
</html>