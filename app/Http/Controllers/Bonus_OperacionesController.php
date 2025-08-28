<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bonus_OperacionesController extends Controller
{
    public function frmbonus(){
    return view('Bonus');
}

public function bonus(Request $request){
    // Solicitar cantidad de números (por defecto 20)
    $cantidad = $request->input('cantidad', 20);
    
    // Validar cantidad
    if($cantidad <= 0 || $cantidad > 50){
        $cantidad = 20;
    }
    
    // Generar números aleatorios entre -225 y 450
    $numeros = [];
    for($i = 0; $i < $cantidad; $i++){
        $numeros[$i] = rand(-225, 450);
    }
    
    // Variables para contar según los requerimientos establecidos por el ejercio
    $mayores_que_cero = 0;     
    $menores_que_cero = 0;     
    $iguales_a_cero = 0;       
    
    // Arrays para almacenar cada tipo de dato segun corresponda
    $nums_positivos = [];
    $nums_negativos = [];
    $nums_ceros = [];
    
    // Analizar cada número
    for($i = 0; $i < $cantidad; $i++){
        $numero = $numeros[$i];
        
        if($numero > 0){
            $mayores_que_cero++;
            $nums_positivos[] = $numero;
        } elseif($numero < 0){
            $menores_que_cero++;
            $nums_negativos[] = $numero;
        } else { // $numero == 0
            $iguales_a_cero++;
            $nums_ceros[] = $numero;
        }
    }
    
    // Mostrar resultados
    echo "<h3>EJERCICIO BONUS - Análisis de Números [-225, 450]</h3>";
    echo "<hr>";
    
    echo "<h4>Números generados ($cantidad números):</h4>";
    echo "<p><strong>";
    for($i = 0; $i < $cantidad; $i++){
        echo $numeros[$i];
        if($i < $cantidad - 1) echo ", ";
    }
    echo "</strong></p><br>";
    
    // Resultados principales según requerimientos
    echo "<h4>Resultados del análisis:</h4>";
    
    // Números mayores que 0
    echo "<p><strong>Números MAYORES que 0:</strong> $mayores_que_cero</p>";
    if($mayores_que_cero > 0){
        echo "<p>Números encontrados: ";
        for($i = 0; $i < count($nums_positivos); $i++){
            echo $nums_positivos[$i];
            if($i < count($nums_positivos) - 1) echo ", ";
        }
        echo "</p>";
    }
    echo "<br>";
    
    // Números menores que 0
    echo "<p><strong>Números MENORES que 0:</strong> $menores_que_cero</p>";
    if($menores_que_cero > 0){
        echo "<p>Números encontrados: ";
        for($i = 0; $i < count($nums_negativos); $i++){
            echo $nums_negativos[$i];
            if($i < count($nums_negativos) - 1) echo ", ";
        }
        echo "</p>";
    }
    echo "<br>";
    
    // Números iguales a 0
    echo "<p><strong>Números IGUALES a 0:</strong> $iguales_a_cero</p>";
    if($iguales_a_cero > 0){
        echo "<p>Números encontrados: ";
        for($i = 0; $i < count($nums_ceros); $i++){
            echo $nums_ceros[$i];
            if($i < count($nums_ceros) - 1) echo ", ";
        }
        echo "</p>";
    }
    echo "<br>";
    
    // Resumen tabla donde se observan valores optenidos segun corresponda a cada arraya
    echo "<h4>Resumen:</h4>";
    echo "<p>Total de números analizados: <strong>$cantidad</strong></p>";
    echo "<p>Mayores que 0: <strong>$mayores_que_cero</strong></p>";
    echo "<p>Menores que 0: <strong>$menores_que_cero</strong></p>";
    echo "<p>Iguales a 0: <strong>$iguales_a_cero</strong></p>";
    
    echo "<br><br><a href='/frmbonus'>Generar otros números</a> ";
}
}
