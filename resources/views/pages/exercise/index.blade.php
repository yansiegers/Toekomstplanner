@php
    $page_title = 'Oefeningen'
@endphp

@extends('layouts.general', [
  'title' => $page_title
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-x-8 gap-y-16">
        <h1 class="col-span-full">{{ $page_title }}</h1>

        <section class="col-span-full">
            <img src="/assets/images/forest-1245692_1920.jpg" alt="Ikigai">
            <h2 class="mt-4">Ikigai</h2>
            <p>
                Ikigai is een Japans concept dat staat voor datgene waar jij je bed voor uitkomt en waard is om voor te leven. Het is je passie waarin vier elementen samenkomen: hetgeen waar je van houdt, wat de wereld nodig heeft...
                <a class="btn btn-primary block mt-4" href="{{ action('App\Http\Controllers\ExerciseController@show', [1]) }}">Meer lezen</a>
            </p>
        </section>

        {{--@foreach ($exercises as $exercise)--}}
        <section class="col-span-full">
            {{--<h2>{{ $exercise->exercise_intro->title }}--}}{{--</h2>--}}
            <h2>De Noordster</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <a class="btn btn-secondary block mt-4" href="#">Meer lezen</a>
                {{--<a href="{{ action('App\Http\Controllers\ExerciseController@show', [$exercise->id]) }}">Meer lezen</a>--}}
            </p>
        </section>
        {{--@endforeach--}}

    </div>
@stop
