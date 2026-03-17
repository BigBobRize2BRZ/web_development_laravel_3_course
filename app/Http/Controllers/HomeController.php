<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    // 3 варианта вернуть view

    // 1) use Illuminate\Support\Facades\View; 
    public function index()
    {
        return View::make('home.index', [
            // Какие-нибудь данные
            // 'name' => 'John',
            // 'age' => 35,
            'title' => 'Home page',
        ]);
    }

    // 2) САМЫЙ КРУТОЙ СПОСОБ, ЧАСТО ИСПОЛЬЗУЕТСЯ: через view() + compact (Создание файла через консоль: php artisan make:view home/test)
    public function test()
    {
        $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);

        $name = 'John';
        $age = 34;
        $title = 'Test page';

        // //! Запросы к бд
        // $users = DB::select('select id, name, email FROM users');
        // $users = DB::select('select id, name, email FROM users WHERE id > :id AND name != :name', [1, 'ivan2']);
        // $users = DB::select('select count(*) AS count FROM users');
        // DB::update("UPDATE users SET name = ? WHERE id > ?", ["ilya", 500]);
        // DB::delete('delete from users where id = ?', [3]);

        // dd($users);

        // DB::insert("insert into users (name, email) VALUES (?, ?)", ['ivan3', 'ivan3@ivan']);


        //! Построитель запросов
        // $users = DB::table('users')->get();
        // $users = DB::table('users')->get(['id', 'name']);
        // $users = DB::table('users')->first();
        // $users = DB::table('users')->where('name', '=', 'ivan')->first();

        // $users = DB::table('users')
        //     ->where('id', '<', '10')
        //     ->orderBy('name', 'desk')
        //     ->get();

        // $users = DB::table('users')
        //     ->where('id', '<', '10')
        //     ->orderBy('name', 'asc')
        //     ->get();

        // $users = DB::table('users')->find(2, ['name']);
        // dd($users);

        // // Удобный для работы с данными из таблицы (Вывод по всему столбцу)
        // $users = DB::table('users')->pluck('name', 'email');
        // dd($users);

        // $cities = DB::table('city')->get();
        // dd($cities);

        // // Не работает, не трогать
        // DB::table('city')->orderBy('ID')->chunk(100, function(Collection $cities) {
        //     foreach ($cities as $city) {
        //         if ($city->Name == 'Salvador') {
        //             return false;
        //         }
        //     }
        // });


        // $cities = DB::table('city')->select(['ID', 'Name'])->limit(10)->get();
        // dd($cities);


        // $cities = DB::table('city')
        //     ->where([['ID', '>', 3], ['ID', '<', 10]])
        //     // // ->orWhere('ID', '<', 20)
        //     ->get();        
        // dd($cities);

        // $cities = DB::table('city')
        //     ->whereRaw('(ID between ? and ? and Name != ?) or (ID = ?)', [2, 10, 'Qandahar', 1])
        //     ->get();
        // dd($cities);


        // $cities = DB::table('city')->count();
        // $cities = DB::table('city')->max('Population');
        // $cities = DB::table('city')->min('Population');

        // $cities = DB::table('city')
        //     ->where('Population', 'desc')
        //     ->limit(1)
        //     ->first('Population');
        // dd($cities);


        // $cities = DB::table('city')->select(['ID', 'Name'])
        //     ->whereIn('id', [1,2,3])
        //     ->get();

        // $cities = DB::table('city')->where('Name', 'like', '%am%')->get();
        // dd($cities);

        // $posts = Post::all()->toArray();
        // $posts = Post::first()->toArray();
        // $posts = Post::find(1, ['id', 'title'])->toArray();
        // dump($posts);

        // $countries = Country::all(['Code', 'Name'])->toArray();
        // $countries = Country::query()
        //     ->where('Population', '>', 1000000)
        //     ->orderBy('Population', 'desc')
        //     ->limit(5)
        //     ->get(['Name', 'Population'])
        //     ->toArray();
        // dump($countries);

        // return view('home.test', compact('name', 'age', 'title', 'users')); // Передаются

        // return response()->json($countries);

        // Post::query()->create([
        //     'title' => 'Post 2',
        //     'content' => 'Post 2 Content',
        //     'category_id' => rand(1,2),
        //     'status' => 1,
        // ]);

        // $post = Post::query()->find(2);
        // dump($post->delete());

        // $category = Category::query()->find(1);
        // dump($category->toArray());

        // $category = Category::query()->where('category_id', '=', 2);
        // dump($category);


        // $category = Post::query()->find(2);
        // dump($category->toArray());

        // dump($category->post);
        // // dump($category->post->title);

        // $post = Post::query()->find(2);
        // dump($post->toArray());

        // dump($post->category->title);



        // $category = Category::query()->find(2);
        // dump($category->toArray());
        // $posts = $category->posts;
        // dump($posts->toArray());

        // $post = Post::query()->find(2);
        // dump($post->toArray());
        // dump($post->category->toArray());

        // $categories = Category::with('posts')->get();
        // dump($categories->toArray());

        // foreach ($categories as $category) {
        //     echo "{$category->title} <br>";
        //     foreach ($category->posts as $post) {
        //         echo "{$post->title} <br>";
        //     }
        //     echo '<hr>';
        // } 



        // $post = Post::query()->find(2);

        // $tags = $post->tags;
        // dump($post);
        // $tags = $post->tags;
        // dump($tags);

        // foreach ($tags as $tag) {
        //     echo "{$tag->title} - {$tag->pivot->created_at} <br>";
        // }

        // $tag = Tag::query()->find(2);

        // $posts = $tag->posts;
        // dump($tag);
        // $posts = $tag->posts;
        // dump($posts);

        // foreach ($posts as $post) {
        //     echo "{$post->title} - {$post->pivot->created_at} <br>";
        // }

        // $category = Category::query()->find(2);
        // $category->posts()->save(new Post([
        //     'title' => 'Post 7',
        //     'Slug' => 'Post-7',
        //     'content' => 'Post 7 content',
        //     'body' => 'Post 10 body',
        //     'status' => 1,
        //     'views' => 0,
        // ]));

        // $category = Category::query()->find(2);

        // $category->posts()->saveMany([
        //     new Post(['title' => 'Post 8', 'slug' => 'Post-8', 'content' => 'Post 8 content', 'body' => 'Post 8 body', 'status' => 1, 'views' => 0]),
        //     new Post(['title' => 'Post 9', 'slug' => 'Post-9', 'content' => 'Post 9 content', 'body' => 'Post 9 body', 'status' => 1, 'views' => 0]),
        // ]);

        // $category = Category::query()->find(2);

        // $category->posts()->create([
        //     'title' => 'Post 10',
        //     'slug' => 'Post-10',
        //     'content' => 'Post 10 content',
        //     'body' => 'Post 10 body',
        //     'status' => 1, 
        //     'views' => 0,
        // ]);


        // $category = Category::query()->find(1);
        // $post = Post::query()->find(4);




        // $category = Category::query()->find(1);
        // $post = Post::query()->find(5);
        // $post->category()->assciate($category);
        // $post->save();
        
        // $post = Post::query()->find(7);
        // $post->category()->disassociate();
        // $post->save();

        // $post = Post::query()->find(8);
        // $post->tags()->attach([2, 3, 4]); // в post_tag добавляет
        // $post->tags()->detach([1]);
        // $post->tags()->sync([1, 2, 3, 4]); // заполняет все
        // $post->tags()->toggle([1, 2, 3, 4]); // переключает

        return view('home.test', compact('name', 'age', 'title', 'users'));
    }

    // 3) Через view()->with([])
    public function contact()
    {
        $title = 'Contact page';
        return view('home.contact')->with(['title' => $title]);
    }

    public function store(Request $request)
    {
        Post::query()->create($request->all());
        return $request->all();
    }

    public function update(Request $request)
    {
        // $post = Post::query()->find($request->id);
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->category_id = $request->category_id;
        // $post->status = $request->status;
        // $post->save();

        // $post = Post::query()->findOrFail($request->id);
        // $post->update($request->all());

        Post::query()
            ->where('id', $request->id)
            ->update($request->all());

        return 'OK';
    }
}
