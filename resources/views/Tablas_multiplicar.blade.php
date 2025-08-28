<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h2>Tabla de Multiplicar</h2>
    
    <p>Ingresa un número del 1 al 10 para ver su tabla de multiplicar</p>
    <p><strong>Ejemplo:</strong> Aqui encontraras el resultado de las tablas en un rango desde  la tabla 1x10: hasta la 10x10:</p>
    
    <form method="POST" action="/tabla">
        @csrf
        
        <p>
            Número (1-10): <input type="number" name="numero" min="1" max="10" required>
        </p>
        
        <button type="submit">Ver Tabla</button>
    </form>
</body>
</html>