<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialrOperacionesController extends Controller
{
    // EJERCICIO 2: CALCULAR FACTORIAL
public function frmfactorial(){
    return view('FactorialN');
}

public function factorial(Request $request){
    $numero = $request->numero;
    
    // Verificar que esté entre 1 y 10
    if($numero < 1 || $numero > 10){
        echo "Por favor ingrese un número del 1 al 10";
        echo "<br><a href='/frmfactorial'>Intentar de nuevo</a>";
        return;
    }
    
    // Calcular factorial
    $factorial = 1;
    $proceso = "";
    
    for($i = 1; $i <= $numero; $i++){
        $factorial = $factorial * $i;
        
        // Construir el proceso para mostrarlo
        if($i == 1){
            $proceso = "1";
        } else {
            $proceso = $proceso . " × " . $i;
        }
    }
    
    echo "<h3>Factorial de $numero</h3>";
    echo "El proceso es: $proceso<br>";
    echo "El factorial de $numero es: <strong>$factorial</strong><br><br>";
    echo "<a href='/frmfactorial'>Calcular otro factorial</a>";
}
}
