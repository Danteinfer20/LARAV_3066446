<!DOCTYPE html>
<html>
<head>
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear Nuevo Post</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        
        <p>
            <label>Nombre:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </p>

        <p>
            <label>Contenido:</label><br>
            <textarea name="body" rows="5" cols="50" required>{{ old('body') }}</textarea>
        </p>

        <p>
            <button type="submit">Guardar Post</button>
            <a href="{{ route('post.index') }}">Cancelar</a>
        </p>
    </form>
</body>
</html>