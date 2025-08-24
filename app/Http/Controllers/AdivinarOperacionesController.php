<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinarOperacionesController extends Controller
{
     public function frmadivinar(){
        $numeroSecreto = rand(1, 70);
        return view('AdivinarN', compact('numeroSecreto'));
    }

    public function adivinar(Request $request){
        $numeroSecreto = $request->numero_secreto;
        $intento = $request->intento;
        $intentos = $request->intentos + 1;
        
        if($intento == $numeroSecreto){
            echo "¡FELICIDADES! Adivinaste el número $numeroSecreto en $intentos intentos<br>";
            echo "<a href='/frmadivinar'>Jugar de nuevo</a>";
        }
        else if($intento < $numeroSecreto){
            echo "el numero es MAYOR que $intento<br>";
            echo "Intentos: $intentos<br><br>";
            
            echo '<form method="POST" action="/adivinar">';
            echo csrf_field();
            echo '<input type="hidden" name="numero_secreto" value="' . $numeroSecreto . '">';
            echo '<input type="hidden" name="intentos" value="' . $intentos . '">';
            echo 'tu siguiente numero: <input type="number" name="intento" min="1" max="70" required>';
            echo '<button type="submit">Intentar</button>';
            echo '</form>';
            echo "<br><a href='/frmadivinar'>Nuevo juego</a>";
        }
        else if($intento > $numeroSecreto){
            echo "El número es MENOR que $intento<br>";
            echo "Intentos: $intentos<br><br>";
            
            echo '<form method="POST" action="/adivinar">';
            echo '<input type="hidden" name="numero_secreto" value="' . $numeroSecreto . '">';
            echo '<input type="hidden" name="intentos" value="' . $intentos . '">';
            echo 'Tu siguiente número: <input type="number" name="intento" min="1" max="70" required>';
            echo '<button type="submit">Intentar</button>';
            echo '</form>';
            echo "<br><a href='/frmadivinar'>Nuevo juego</a>";
        }
    }
}

