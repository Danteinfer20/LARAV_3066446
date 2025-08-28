<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    // Mostrar todas las categorías
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    
    // Mostrar formulario de creación
    public function create()
    {
        return view('categories.create');
    }
    
    // Guardar nueva categoría
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100'
        ]);
        
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        
        return redirect()->route('category.index');
    }
}