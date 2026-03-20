@extends('layouts.main')

@section('title', $title ?? 'Test title')

@section('content')
<h1>{{ $title }}</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select name="category_id" class="form-select" aria-label="Default select example">
            <option selected>Открыть меню выбора</option>
            <option value="1">Category 1</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Post Title">
        @if ($errors->has('title'))
            <div class="invalid-feedback">
                {{$errors->first('title')}}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-2123invalid @enderror" value="{{ old('slug') }}" id="slug" name="slug" placeholder="Post slug">
    </div>

    <div class="mb-3">
        <label for="floatingTextarea" class="form-label">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}" placeholder="Post content" id="content" name="content"></textarea>
    </div>

    <button type="submit" class="btn btn-primary"> Create Post </button>
</form>
@endsection