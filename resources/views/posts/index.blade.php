<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Lista de Posts</h1>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('post.create') }}">Crear Nuevo Post</a>
    
    <br><br>

    @if($posts->count() > 0)
        @foreach($posts as $post)
            <div style="border: 1px solid #ccc; padding: 10px; margin: 10px 0;">
                <h3>{{ $post->name }}</h3>
                <p>{{ $post->body }}</p>
                <small>Creado: {{ $post->created_at->format('d/m/Y') }}</small>
            </div>
        @endforeach
    @else
        <p>No hay posts disponibles.</p>
        <a href="{{ route('post.create') }}">Crear el primer post</a>
    @endif
</body>
</html>