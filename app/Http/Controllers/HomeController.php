<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $cities = DB::table('city')->get();
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
