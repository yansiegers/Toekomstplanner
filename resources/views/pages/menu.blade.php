@php
    $page_title = 'Menu'
@endphp

@extends('layouts.general', [
  'title' => $page_title
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <h1 class="text-xl text-center font-bold mt-5">{{ $page_title }}</h1>
        </section>

        <section class="col-span-4 col-start-2">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ action('App\Http\Controllers\ExerciseController@show', [1]) }}">Oefening intro</a></li>
                <li><a href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}">Oefening invullen</a></li>
                <li><a href="{{ action('App\Http\Controllers\ExerciseResultController@index', [1]) }}">Oefening resultaten</a></li>
            </ol>
        </section>
    </div>
@stop
