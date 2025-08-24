<!DOCTYPE html>
<html>
<head>
    <title>Adivinar Número</title>
</head>
<body>
    <h2>Juego: Adivina el Número</h2>
    
    <p>se crea  un número del 1 al 70. ¡Trata de adivinarlo!</p>
    
    <form method="POST" action="/adivinar">
        @csrf
        
        <input type="hidden" name="numero_secreto" value="{{ $numeroSecreto }}">
        <input type="hidden" name="intentos" value="0">
        
        <p>
            ¿Cuál es el número?: <input type="number" name="intento" min="1" max="70" required>
        </p>
        
        <button type="submit">Intentar</button>
    </form>
</body>
</html>