<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prueba de conexion a vista</title>
</head>
<body>
    <h1> sumar dos numeros </h1>
    <form action="/suma" method="POST">
        @csrf
        <label for="num1">numero 1 :</label>
        <input type="number" name= "num1 " id= "num1" required>"
        <br>
        <label for="num2">numero 2 :</label>
        <input type="number" name= "num2 " id= "num2" required>"
        <br>

        <button type="submit"submit >Sumar</button>
    </form>
    <h3>resultado</h3>
</body>
</html>