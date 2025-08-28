<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Routing\Controller;

class OperacionesController extends Controller
{
    public function frmcuadratica()
    {
        return view('frm_cuadratica');
    }
    
    public function cuadratica(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        
        // Inicializar variables
        $x1 = null;
        $x2 = null;
        
        $ecu1 = $b * $b - (4 * $a * $c);
        
        if ($ecu1 > 0 && $a != 0) {
            $raiz = sqrt($ecu1);
            $x1 = (-$b + $raiz) / (2 * $a);
            $x2 = (-$b - $raiz) / (2 * $a);
            echo "x1 = $x1<br>";
            echo "x2 = $x2<br>";
        } else {
            echo "Ingrese otros valores";
        }
        
        $resul = new Result();
        $resul->a = $request->a;
        $resul->b = $request->b;
        $resul->c = $request->c;
        $resul->x1 = $x1;
        $resul->x2 = $x2;
        $resul->save();
        
        return $resul;
    }
}