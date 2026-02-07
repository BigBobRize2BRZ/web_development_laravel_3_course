@extends('layouts.main')

@section('content')
    <h1>Test page</h1>

@isset($users)
    @foreach ($users as $user)
        id: {{$user->id}} <br>
        name: {{$user->name}} <br>
    @endforeach
@endisset

@if (10 > 100)
    <p>10 > 100</p>
@elseif (10 < 5)
    <p>10 < 5</p>
@else   
    <p>5 = 5</p>
@endif


@php
    $users2 = [];
@endphp

@forelse ($users2 as $user)
    {{$user->name}}
@empty 
    <p>No users</p>
@endforelse


@for ($i = 1; $i <= 10; $i++)
    @if ($i == 5)
        @continue
    @endif
    {{$i}} <br>
    @if ($i == 9)
        @break
    @endif
@endfor

@isset($users)
    @foreach ($users as $user)
        {{$loop->iteration}} - {{$user->name}} <br>
    @endforeach
    <br>
@endisset

@isset($users)
    @foreach ($users as $user)
        <span @class(['text-danger' => $loop->even])> {{$loop->iteration}} - {{$user->name}}</span> <br>
    @endforeach
@endisset

@endsection



@section('title', $title ?? 'Test title')