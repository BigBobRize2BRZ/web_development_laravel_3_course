<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create', ['title' => 'add post']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:5'],
            'slug' => ['required', 'max:225', 'unique:posts'],
            'content' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        dump($request->all());
    }
}

