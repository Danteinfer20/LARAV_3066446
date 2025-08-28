<!DOCTYPE html>
<html>
<head>
    <title>Promedio de Notas</title>
</head>
<body>
    <h2>Calcular Promedio de 5 Notas</h2>
    
    <p>Ingresa 5 notas del 0 al 5 para calcular el promedio</p>
    <p><strong>Nota:</strong> Se considera aprobado con promedio ≥ 3</p>
    
    <form method="POST" action="/notas">
        @csrf
        
        <p>
            Nota 1 (0-5): <input type="number" step="0.1" name="nota1" min="0" max="5" required>
        </p>
        
        <p>
            Nota 2 (0-5): <input type="number" step="0.1" name="nota2" min="0" max="5" required>
        </p>
        
        <p>
            Nota 3 (0-5): <input type="number" step="0.1" name="nota3" min="0" max="5" required>
        </p>
        
        <p>
            Nota 4 (0-5): <input type="number" step="0.1" name="nota4" min="0" max="5" required>
        </p>
        
        <p>
            Nota 5 (0-5): <input type="number" step="0.1" name="nota5" min="0" max="5" required>
        </p>
        
        <button type="submit">Calcular Promedio</button>
    </form>
</body>
</html>