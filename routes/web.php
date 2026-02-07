<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//! 1) Маршрутизация
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function(){
//     return 'test'; // возвращается строка
// });

// Route::get('/hi', function(){
//     return view('test.hi', ['title'=>'Main page']); // возвращается вёрстка файла из папки test / hi.blade.php
//     // [''=>'']- использование переменных в файле
// });

// // Маршрутизация через контроллер, созданный через композер 
// Route::get('/hi', [MainController::class, 'index']);

// Route::get('/post/{id}', function($id) {
//     return "Post page {$id}";
// });

// Route::get('/post/{id}/comment/{comment}', function($id, $comment) {
//     return "Post page {$id}, comment {$comment}";
// })->where(['id' => '[0-9]+', 'comment' => '[a-z]+']); // регулярное выражение на цифры и маленькие буквы

// // проверять работу поста через постмен
// Route::post('/post', function() {
//     return 'Store post';
// })->withoutMiddleware(VerifyCsrfToken::class); // Маршрут отрабатывается без посредника

// // match и для пост и для гет, метод any- любой метод
// Route::match(['get', 'post'], '/get-post', function() {
//     return 'Hello from get/post';
// })->withoutMiddleware(VerifyCsrfToken::class);

// redirect перенаправляет на другой uri
// Route::redirect('/here', '/hi', 301);

//! 2) Префикс, 404, json

// // prefix автоматически добавляет '/admin' в начале uri
// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return 'Admin page';
//     });

//     Route::get('/posts', function () {
//         return 'Admin posts page';
//     });

//     Route::get('/posts/{id}', function ($id) {
//         return "Admin posts {$id}";
//     });
// });

// // При ошибке в url выдаст ошибку 404
// Route::fallback(function() {
//     // Перенаправит на view 404
//     // abort(404,'404 - Страница не найдена');
//     return response()->json(['ответ' => 'Страница не найдена', 404]); // выведет json с ошибкой

//     // return response('404 - Страница не найдена!!!', 404); // выведет статус 404
//     // return '404 - Страница не найдена';
// });



//! 3) Контроллеры
// Route::get('/home', [HomeController::class, 'index']);
// // Одиночный контроллер __invoke()
// Route::get('/single', [TestController::class]);


// // Ресурсные контроллеры

// Route::prefix('admin')->name('admin.')->group(function () {
//     // метод, uri, действие, имя маршрута (нужно для ссылок)
//     Route::get('/products', [ProductController::class, 'index'])->name('products.index');

//     Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

//     Route::post('/products', [ProductController::class, 'store'])->name('products.store')->withoutMiddleware(VerifyCsrfToken::class); /* игнорирование csrf */

//     Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

//     Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

//     Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->withoutMiddleware(VerifyCsrfToken::class);

//     Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->withoutMiddleware(VerifyCsrfToken::class);


//     // Короткая запись создания маршрутов ресурсного контроллера (всего, что сверху)
//     Route::resource('posts', PostController::class);
// });

//! 4) Представления

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/test', [HomeController::class, 'test'])->name('home.test');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');