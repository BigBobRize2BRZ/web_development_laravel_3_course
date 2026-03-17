@extends('layouts.main')

@section('title', $title ?? 'Test title')

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('posts.store') }}" method="post">
        
    </form>
@endsection

