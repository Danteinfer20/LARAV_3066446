<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuPrincipal_OperacionesController extends Controller
{
    public function index()
    {
        return view('menu_principal');
    }
}
