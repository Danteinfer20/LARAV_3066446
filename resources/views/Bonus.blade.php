<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis de Números</title>
</head>
<body>
    <h1>EJERCICIO BONUS</h1>
    <h3>Análisis de Números entre -225 y 450</h3>
    
    <div>
        <h4>Requerimientos:</h4>
        <ul>
            <li>Generar números entre -225 y 450</li>
            <li>Contar números mayores que 0</li>
            <li>Contar números menores que 0</li>
            <li>Contar números iguales a 0</li>
        </ul>
    </div>
    
    <form action="/bonus" method="POST">
        @csrf
        <div>
            <label><strong>Cantidad de números:</strong></label><br>
            <input type="number" name="cantidad" min="1" max="50" value="20" required>
            <br>
            <small>(Máximo 50 números)</small>
        </div>
        <br>
        <button type="submit">Generar y Analizar</button>
      
    </form>
</body>
</html>