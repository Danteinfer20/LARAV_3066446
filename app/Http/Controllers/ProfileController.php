<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'biography' => 'required|string',
            'website' => 'required|url'
        ]);

        Profile::create([
            'title' => $request->title,
            'biography' => $request->biography,
            'website' => $request->website
        ]);

        return redirect()->route('profile.index')->with('success', 'Perfil creado exitosamente');
    }
}