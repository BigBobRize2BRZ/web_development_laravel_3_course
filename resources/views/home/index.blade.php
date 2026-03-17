@extends('layouts.main')

@section('content')
<h1>Home page</h1>
@endsection

@section('navbar')
<!-- добавили к навбару своё -->
@parent
<div class="container">
    Some content
    <!-- <form action="/store" method="POST">
        <p>
        <p>Название</p>
        <input name="title">
        </p>
        <p>
        <p>Контент</p>
        <input name="content">
        </p>
        <p>
        <p>id категории</p>
        <input name="category_id">
        </p>
        <p>status</p>
        <input name="status">
        </p>
        <p>
            <input type="submit">
        </p>
    </form> -->
</div>
@endsection

@section('title', $title ?? 'Test title')