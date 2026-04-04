<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DeskResource;
use App\Models\Desk;
use http\Env\Response;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return DeskResource::collection(Desk::all());

        /* Найдёт и выведет все + создаст для каждого подмассив lists в котором будут desk_id из таблицы desk_lists */
        return DeskResource::collection(Desk::with('lists')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        /* Найдёт и выведет по id либо выведет 404 + создаст подмассив lists в котором будут desk_id из таблицы desk_lists */
        return new DeskResource(Desk::with('lists')->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
