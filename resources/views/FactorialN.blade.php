<!DOCTYPE html>
<html>
<head>
    <title>Calcular Factorial</title>
</head>
<body>
    <h2>Calcular Factorial</h2>
    
    <p>Ingresa un número del 1 al 10 para calcular su factorial</p>
    <p><strong>como funciona el factorial? </strong><h4>  es una multiplicacion constante de numeros que se determina por longuitud del mismo numero</h4>     El factorial de 4 es: 1 × 2 × 3 × 4 = 24</p>
    
    <form method="POST" action="/factorial">
        @csrf
        
        <p>
            Número (1-10): <input type="number" name="numero" min="1" max="10" required>
        </p>
        
        <button type="submit">Calcular Factorial</button>
    </form>
</body>
</html>