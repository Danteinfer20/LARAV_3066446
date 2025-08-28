<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'body' => 'required|string'
        ]);

        Post::create([
            'name' => $request->name,
            'body' => $request->body
        ]);

        return redirect()->route('post.index')->with('success', 'Post creado exitosamente');
    }
}