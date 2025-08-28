<!DOCTYPE html>
<html>
<head>
    <title>Análisis de Números Aleatorios</title>
</head>
<body>
    <h2>Análisis de 20 Números Aleatorios</h2>
    
    <p>Este programa genera 20 números aleatorios del 1 al 70 y analiza:</p>
    
    <ul>
        <li><strong>a./</strong> Contar números impares múltiplos de 8</li>
        <li><strong>b./</strong> Promedio de los números pares</li>
        <li><strong>c./</strong> El número mayor múltiplo de 7</li>
        <li><strong>d./</strong> Cuántos números 6, 11, 17 se generaron</li>
    </ul>
    
    <form method="POST" action="/numeros">
        @csrf
        
        <p><strong>Haz clic para generar y analizar 20 números aleatorios:</strong></p>
        
        <button type="submit"> Generar y Analizar Números</button>
    </form>
</body>
</html>