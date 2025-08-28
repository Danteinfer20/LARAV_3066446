<!DOCTYPE html>
<html>
<head>
    <title>Crear Perfil</title>
</head>
<body>
    <h1>Crear Nuevo Perfil</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.store') }}" method="POST">
        @csrf
        
        <p>
            <label>Título:</label><br>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Ej: Desarrollador Web" required>
        </p>

        <p>
            <label>Biografía:</label><br>
            <textarea name="biography" rows="5" cols="50" placeholder="Cuéntanos sobre ti..." required>{{ old('biography') }}</textarea>
        </p>

        <p>
            <label>Website:</label><br>
            <input type="url" name="website" value="{{ old('website') }}" placeholder="https://ejemplo.com" required>
        </p>

        <p>
            <button type="submit">Guardar Perfil</button>
            <a href="{{ route('profile.index') }}">Cancelar</a>
        </p>
    </form>
</body>
</html>