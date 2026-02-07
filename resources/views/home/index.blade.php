@extends('layouts.main')

@section('content')
    <h1>Home page</h1>
@endsection

@section('navbar')
<!-- добавили к навбару своё -->
    @parent
    <div class="container">
        Some content
    </div>
@endsection

@section('title', $title ?? 'Test title')
