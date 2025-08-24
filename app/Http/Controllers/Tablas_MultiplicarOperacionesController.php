<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tablas_MultiplicarOperacionesController extends Controller
{
    
public function frmtabla(){
    return view('Tablas_multiplicar');
}

public function tabla(Request $request){
    $numero = $request->numero;
    
    // Verificar que esté entre 1 y 10
    if($numero < 1 || $numero > 10){
        echo "ERROR: Por favor ingrese un número del 1 al 10";
        echo "<br><br><a href='/frmtabla'>Intentar de nuevo</a>";
        return;
    }
    
    // Mostrar la tabla de multiplicar
    echo "<h3>Tabla de multiplicar del $numero</h3>";
    echo "<hr>";
    
    for($i = 1; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo "$numero × $i = $resultado<br>";
    }
    
    echo "<br><a href='/frmtabla'>Calcular otra tabla</a>";
}
}
