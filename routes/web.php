<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdivinarOperacionesController;
use App\Http\Controllers\FactorialrOperacionesController;
use App\Http\Controllers\Tablas_MultiplicarOperacionesController;
use App\Http\Controllers\PromedioN_OperacionesController;
use App\Http\Controllers\GenerarNumeros_OperacionesController;
use App\Http\Controllers\Bonus_OperacionesController;
use App\Http\Controllers\MenuPrincipal_OperacionesController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//vista con archivo html
Route::get('/inicio1', function () {
    return view('inicio1');
});


// vista de controlador de formula 
Route::get('frmcuadratica/', [OperacionesController::class, 'frmcuadratica']);
Route::post('cuadratica/', [OperacionesController::class, 'cuadratica'])->name('cudratica.calcular');





// con vista GET
Route::get('/suma', function () {
    return view('suma');
});
// con verbo post
Route::post('/suma', function () {
    return view('suma');
});
// Ejercio 1:adivinar un numero ramdo con historial y detemrinar cual sea numero maxiomo de intentos
Route::get('frmadivinar', [AdivinarOperacionesController::class, 'frmadivinar']);
Route::post('adivinar', [AdivinarOperacionesController::class, 'adivinar'])->name('adivinar.jugar');

// Ejercio 2 :factorial de un numero 1*10

Route::get('frmfactorial', [FactorialrOperacionesController::class, 'frmfactorial']);
Route::post('factorial', [FactorialrOperacionesController::class, 'factorial'])->name('factorial.calcular');

// Ejercio 4: Tabla de multiplicar
Route::get('frmtabla', [Tablas_MultiplicarOperacionesController::class, 'frmtabla']);
Route::post('tabla', [Tablas_MultiplicarOperacionesController::class, 'tabla'])->name('tabla.calcular');

// Ejercio 3: Promedio de 5 notas
Route::get('frmnotas', [PromedioN_OperacionesController::class, 'frmnotas']);
Route::post('notas', [PromedioN_OperacionesController::class, 'notas'])->name('notas.calcular');

// Ejercio 5: Análisis de números aleatorios generados por funcion  ramdom rango entre (1,70) para multiplos de 8 y 7 y nuemros pares 
Route::get('frmnumeros', [GenerarNumeros_OperacionesController::class, 'frmnumeros']);
Route::post('numeros', [GenerarNumeros_OperacionesController::class, 'numeros'])->name('numeros.analizar');


//Ejerricio de bonus

Route::get('/frmbonus', [Bonus_OperacionesController::class, 'frmbonus']);
Route::post('/bonus', [Bonus_OperacionesController::class, 'bonus']);

// vista con html ara ver los ejercio en una sola pantalla
Route::get('/menu', [MenuPrincipal_OperacionesController::class, 'index'])->name('menu.principal');



// ejercios con conexion  de base datos para ejercios
Route::get('categories', [CategoryControllerController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryControllerController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryControllerController::class, 'store'])->name('category.store');