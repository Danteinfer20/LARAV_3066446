<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerarNumeros_OperacionesController extends Controller
{
    //// EJERCICIO 5: ANALIZAR 20 NÚMEROS ALEATORIOS
public function frmnumeros(){
    return view('Numeros_Analizar');
}

public function numeros(Request $request){
    // Generar 20 números aleatorios del 1 al 70
    $numeros = [];
    for($i = 0; $i < 20; $i++){
        $numeros[$i] = rand(1, 70);
    }
    
    // Variables para almacenar resultados segun se establecieron en los requerimientos del ejercio
   
    $multiplos_8 = 0;              
    $suma_pares = 0;               
    $cantidad_pares = 0;           
    $mayor_multiplo_7 = 0;         
    $contador_especiales = 0;      
    
    // Arrays para mostrar detalles de cada caso segun corresponda
    $numeros_multiplos8 = [];      
    $numeros_pares = [];
    $multiplos_7 = [];
    $numeros_especiales = [];
    
    // Analizar cada número de los 20 que se guardan en ael array 
    for($i = 0; $i < 20; $i++){
        $numero = $numeros[$i];
        
        // OPCIÓN 1: Contar múltiplos de 8 (todos serán pares  por la secuencia que sigue la logica)
        if($numero % 8 == 0){
            $multiplos_8++;
            $numeros_multiplos8[] = $numero;
        }
        
        // b. Promedio de números pares
        if($numero % 2 == 0){
            $suma_pares += $numero;
            $cantidad_pares++;
            $numeros_pares[] = $numero;
        }
        
        // c. El número mayor múltiplo de 7
        if($numero % 7 == 0){
            $multiplos_7[] = $numero;
            if($numero > $mayor_multiplo_7){
                $mayor_multiplo_7 = $numero;
            }
        }
        
        // d. Contar cuántos números 6, 11, 17 se generaron(este caso es especial por que si el ejercio no henera ninguno de estos valores no se implemenataria esta funcion)
        if($numero == 6 || $numero == 11 || $numero == 17){
            $contador_especiales++;
            $numeros_especiales[] = $numero;
        }
    }
    
    // Calcular promedio de pares
    $promedio_pares = 0;
    if($cantidad_pares > 0){
        $promedio_pares = round($suma_pares / $cantidad_pares, 2); // Redondear a 2 decimales con la palabra reservada round
    }
    
    // Mostrar resultados
    echo "<h3>  >Análisis de 20 números aleatorios (1-70)</h3>";
    echo "<hr>";
    
    // Mostrar los 20 números generados
    echo "<h4>Números generados:</h4>";
    echo "<p><strong style='color: blue;'>lista de nuemros: </strong><br>";
    
    for($i = 0; $i < 20; $i++){
        echo $numeros[$i];
        if($i < 19) echo ", ";
    }
    echo "</strong></p><br>";
    
    // OPCIÓN 1: Múltiplos de 8
    echo "<h4>a) Múltiplos de 8:</h4>";
    if($multiplos_8 > 0){
        echo "Cantidad: $multiplos_8<br>";
        echo "Números encontrados: ";
        for($i = 0; $i < count($numeros_multiplos8); $i++){
            echo $numeros_multiplos8[$i];
            if($i < count($numeros_multiplos8) - 1) echo ", ";
        }
        echo "<br>";
    } else {
        echo "No se encontraron múltiplos de 8<br>";
    }
    echo "<br>";
    
    // b. Promedio de números pares
    echo "<h4>b) Promedio de números pares:</h4>";
    if($cantidad_pares > 0){
        echo "Cantidad de pares: $cantidad_pares<br>";
        echo "Números pares: ";
        for($i = 0; $i < count($numeros_pares); $i++){
            echo $numeros_pares[$i];
            if($i < count($numeros_pares) - 1) echo ", ";
        }
        echo "<br>";
        echo "Suma de pares: $suma_pares<br>";
        echo "Promedio de pares: $promedio_pares<br>";
    } else {
        echo "No se encontraron números pares<br>";
    }
    echo "<br>";
    
    // c. Mayor múltiplo de 7
    echo "<h4>c) Mayor múltiplo de 7:</h4>";
    if($mayor_multiplo_7 > 0){
        echo "Múltiplos de 7 encontrados: ";
        for($i = 0; $i < count($multiplos_7); $i++){
            echo $multiplos_7[$i];
            if($i < count($multiplos_7) - 1) echo ", ";
        }
        echo "<br>";
        echo "Mayor múltiplo de 7: <strong>$mayor_multiplo_7</strong><br>";
    } else {
        echo "No se encontraron múltiplos de 7<br>";
    }
    echo "<br>";
    
    // d. Contador de números especiales (6, 11, 17)
    echo "<h4>d) Números 6, 11 y 17:</h4>";
    if($contador_especiales > 0){
        echo "Cantidad encontrada: $contador_especiales<br>";
        echo "Números encontrados: ";
        for($i = 0; $i < count($numeros_especiales); $i++){
            echo $numeros_especiales[$i];
            if($i < count($numeros_especiales) - 1) echo ", ";
        }
        echo "<br>";
    } else {
        echo "No se encontraron los números 6, 11 ó 17<br>";
    }
    
    echo "<br><br><a href='/frmnumeros'>Generar otros números</a>";
}
}
