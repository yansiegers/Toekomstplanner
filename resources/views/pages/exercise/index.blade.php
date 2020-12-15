@php
    $page_title = 'Oefeningen'
@endphp

@extends('layouts.general', [
  'title' => $page_title
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-x-8 gap-y-16">
        <h1 class="col-span-full">{{ $page_title }}</h1>

        <div class="col-span-full lg:col-span-4 lg:row-span-1">
            <img class="h-64 w-full object-cover object-middle" src="/assets/images/forest-1245692_1920.jpg" alt="Ikigai">
        </div>
        <section class="col-span-full lg:col-span-2">
            <h2 class="mt-4">Ikigai</h2>
            <p>
                Ikigai is een Japans concept dat staat voor datgene waar jij je bed voor uitkomt en waard is om voor te leven. Het is je passie waarin vier elementen samenkomen: hetgeen waar je van houdt, wat de wereld nodig heeft...
                <a class="btn btn-primary block mt-4" href="{{ action('App\Http\Controllers\ExerciseController@show', [1]) }}">Meer lezen</a>
            </p>
        </section>

        {{--@foreach ($exercises as $exercise)--}}
        <section class="col-span-full lg:col-span-2">
            {{--<h2>{{ $exercise->exercise_intro->title }}--}}{{--</h2>--}}
            <h2>De Noordster</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <a class="btn btn-secondary block mt-4" href="#">Meer lezen</a>
                {{--<a href="{{ action('App\Http\Controllers\ExerciseController@show', [$exercise->id]) }}">Meer lezen</a>--}}
            </p>
        </section>
        {{--@endforeach--}}

        <section class="col-span-full lg:col-span-2">
            <h2>Jaarplan</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <a class="btn btn-secondary block mt-4" href="#">Meer lezen</a>
            </p>
        </section>

        <section class="col-span-full lg:col-span-2">
            <h2>3 MIP</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <a class="btn btn-secondary block mt-4" href="#">Meer lezen</a>
            </p>
        </section>

        <section class="col-span-full lg:col-span-2">
            <h2>Roadmap</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <a class="btn btn-secondary block mt-4" href="#">Meer lezen</a>
            </p>
        </section>

    </div>
@stop
