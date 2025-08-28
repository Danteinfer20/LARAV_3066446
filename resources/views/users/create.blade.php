<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Nuevo Usuario</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        
        <p>
            <label>Nombre:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </p>

        <p>
            <button type="submit">Guardar Usuario</button>
            <a href="{{ route('user.index') }}">Cancelar</a>
        </p>
    </form>
</body>
</html>