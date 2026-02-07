<?php

namespace App\Http\Controllers;

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


        $cities = DB::table('city')->select(['ID', 'Name'])
            ->whereIn('id', [1,2,3])
            ->get();

        $cities = DB::table('city')->where('Name', 'like', '%am%')->get();
        dd($cities);


        return view('home.test', compact('name', 'age', 'title', 'users')); // Передаются
    }

    // 3) Через view()->with([])
    public function contact()
    {
        $title = 'Contact page';
        return view('home.contact')->with(['title' => $title]);
    }
}
