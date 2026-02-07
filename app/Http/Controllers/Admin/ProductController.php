<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        dump(route('admin.products.index')); // Полная ссылка на маршрут
        return 'admin products list';
    }

    public function create()
    {
        dump(route('admin.products.create'));
        return 'admin products create';
    }

    public function store()
    {
        dump(route('admin.products.store'));
        return 'admin products store';
    }

    public function show($product)
    {
        return "admin products show: {$product}";
    }

    public function edit($product)
    {
        return "admin products edit: {$product}";
    }

    public function update($product)
    {
        return "admin products update: {$product}";
    }

    public function destroy($product)
    {
        return "admin products destroy: {$product}";
    }
}
