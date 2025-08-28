<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rol = Rol::all();
        return view('rol.index', compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories'
        ]);

        Rol::create([
            'name' => $request->name
        ]);

        return redirect()->route('rol.index')->with('success', 'Rol creada exitosamente');
    }
}