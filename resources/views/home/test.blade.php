@extends('layouts.main')

@section('content')
    <h1>Test page</h1>

@for ($i = 1; $i <= 10; $i++)
    @if ($i == 5)
        @continue
    @endif
    {{$i}} <br>
    @if ($i == 9)
        @break
    @endif
@endfor


@endsection



@section('title', $title ?? 'Test title')