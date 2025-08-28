<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromedioN_OperacionesController extends Controller
{
    public function frmnotas(){
    return view('Promedio_Notas');
}

public function notas(Request $request){
    $nota1 = $request->nota1;
    $nota2 = $request->nota2;
    $nota3 = $request->nota3;
    $nota4 = $request->nota4;
    $nota5 = $request->nota5;
    
    // creacion de array para comprobacion de las 5 notas esten en el rango establecidos por el ejercio
    $notas = [$nota1, $nota2, $nota3, $nota4, $nota5];
    $notasValidas = true;
    $mensaje_error = "";
    // ciclo for que compara nota por nota  en el array desde la posicion 0 hasta la poscion 4
    for($i = 0; $i < 5; $i++){
        if($notas[$i] < 0 || $notas[$i] > 5){
            $notasValidas = false;
            $numeroNota = $i + 1;
            $mensaje_error .= "La nota $numeroNota ($notas[$i]) no está en el rango de 0 a 5<br>";
        }
    }
    
    // Si hay notas inválidas, mostrar error : combinacion  de titulo h3 para remarcar en la casilla del arraya que la nota no es valida y  esta fuera del rango:
    if(!$notasValidas){
        echo "<h3>ERROR: Notas fuera del rango</h3>";
        echo $mensaje_error;
        echo "<br><a href='/frmnotas'>Intentar de nuevo</a>";
        return;
    }
    
    // Calcular promedio con la formula establecida se suman las notas y se dividen por la catidad de ellas en este caso 5
    $suma = $nota1 + $nota2 + $nota3 + $nota4 + $nota5;
    $promedio = $suma / 5;
    
    // Mostrar resultados
    echo "<h3>Resultado de las notas</h3>";
    echo "<hr>";
    echo "Nota 1: $nota1<br>";
    echo "Nota 2: $nota2<br>";
    echo "Nota 3: $nota3<br>";
    echo "Nota 4: $nota4<br>";
    echo "Nota 5: $nota5<br>";
    echo "<br>";
    echo "Suma total: $suma<br>";
    echo "Promedio: $promedio<br><br>";
    
    // Verificar si aprobó ya que el rango de aprobacion es de mayor de 3.0 tomanos el promedio y si supera este rango aprobo si no es el caso no aprobo
    if($promedio >= 3){
        echo "<strong style='color: green;'>APROBADO! </strong><br>";// aqui se combina el color verde en el texto para el mensaje de aprobado
        echo "El promedio ($promedio) es mayor o igual a 3";
    } else {
        echo "<strong style='color: red;'>REPROBADO </strong><br>";// igualmente aqui para el texto si no aprobo
        echo "El promedio ($promedio) es menor a 3";
    }
    
    echo "<br><br><a href='/frmnotas'>Calcular otras notas</a>"; // enlace conectado para verificar otras notas de diferente estudiante
}
}