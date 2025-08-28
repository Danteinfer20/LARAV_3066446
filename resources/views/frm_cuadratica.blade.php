<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario cudratica..</h1>

 <form action="{{route('cudratica.calcular')}}" method="POST" enctype="multipart/form-data">


    @csrf


        <label for="title" >Ingrese el valor de a: </label>
        <input type="text" id="title" name="a" required>

        <label for="title" >Ingrese el valor de b: </label>
        <input type="text" id="title" name="b" required>

        <label for="title" >Ingrese el valor de c: </label>
        <input type="text" id="title" name="c" required>


    <br><br>

    <button type="submit">Calcular..</button>

</form>

</body>
</html>
