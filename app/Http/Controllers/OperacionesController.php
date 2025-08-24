<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
  public function sumar($num1,$num2){

        $resultado=$num1+$num2;

        return ($resultado);

    }
    

}
