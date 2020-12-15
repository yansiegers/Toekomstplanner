@php
    $page_title = 'Menu'
@endphp

@extends('layouts.general', [
  'title' => $page_title,
  'menu' => True
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-8 text-2xl">
        <ol class="col-start-2 col-span-4">
            <li class="py-5">
                <a class="" href="/">
                    <img class="inline h-12 mr-8" src="/assets/icons/outline/map.svg" alt="">Jaarplan
                </a>
            </li>
            <li class="py-5">
                <a class="" href="{{ action('App\Http\Controllers\ExerciseController@index') }}">
                    <img class="inline h-12 mr-8" src="/assets/icons/outline/light-bulb.svg" alt="">Oefeningen
                </a>
            </li>
            <li class="py-5">
                <a class="" href="{{ route('home') }}">
                    <img class="inline h-12 mr-8" src="/assets/icons/outline/book-open.svg" alt="">Blog
                </a>
            </li>

            <li class="py-5"><a href="{{ action('App\Http\Controllers\ExerciseController@show', [1]) }}">Oefening intro</a></li>
            <li class="py-5"><a href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}">Oefening invullen</a></li>
            <li class="py-5"><a href="{{ action('App\Http\Controllers\ExerciseResultController@index', [1]) }}">Oefening resultaten</a></li>
        </ol>
        <a class="btn btn-secondary block col-span-full mt-8" href="{{ route('dashboard') }}">
            <img class="inline mr-1" src="/assets/icons/outline/key.svg" alt="">Inloggen
        </a>
    </div>
@stop
