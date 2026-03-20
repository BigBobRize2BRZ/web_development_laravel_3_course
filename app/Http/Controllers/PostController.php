<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create', ['title' => 'add post']);
    }

    public function store(StorePostRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => ['required', 'max:5'],
        //     'slug' => ['required', 'max:225', 'unique:posts'],
        //     'content' => ['required'],
        //     'category_id' => ['required', 'exists:categories,id'],
        // ],
        // [
        // // 1) способ корректировки ошибок через папку lang и config app.php -> ru
        // // 2) через этот массив
        // // 3) Через создание отдельного реквеста
        //     'title.required' => ':attribute не заполнен',
        //     'title.max' => ':attribute Максимально 5 символов',
        // ],    
        // );

        // dump($request->all());

        Post::query()->create($request->all());

        return redirect()->route('posts.create')->with('success', 'Post saved');
    }
}

