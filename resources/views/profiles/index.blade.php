<!DOCTYPE html>
<html>
<head>
    <title>Perfiles</title>
</head>
<body>
    <h1>Lista de Perfiles</h1>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('profile.create') }}">Crear Nuevo Perfil</a>
    
    <br><br>

    @if($profiles->count() > 0)
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Biografía</th>
                <th>Website</th>
                <th>Fecha de Creación</th>
            </tr>
            @foreach($profiles as $profile)
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->title }}</td>
                    <td>{{ Str::limit($profile->biography, 50) }}</td>
                    <td><a href="{{ $profile->website }}" target="_blank">{{ $profile->website }}</a></td>
                    <td>{{ $profile->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No hay perfiles registrados.</p>
        <a href="{{ route('profile.create') }}">Crear el primer perfil</a>
    @endif
</body>
</html>