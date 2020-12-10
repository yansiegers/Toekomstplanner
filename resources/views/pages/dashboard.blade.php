@extends('layouts.personal', [
  'title' => 'Dashboard'
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <h1 class="mt-5">Dashboard</h1>
        </section>

        <section class="col-span-full grid grid-cols-3 gap-y-2 mb-16 items-center">
            <h2 class="col-span-full">Ga verder waar je gebleven bent</h2>

            <span class="font-bold"><a href="#">Mijn jaarplan</a></span>
            <span class="text-center">Niet gestart</span>
            <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}">Starten</a>

            <span class="font-bold"><a href="#">Ikigai</a></span>
            <span class="text-center">20%</span>
            <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}">Verder</a>

            <span class="font-bold"><a href="#">Wie ben ik?</a></span>
            <span class="text-center">60%</span>
            <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}">Verder</a>

            <span class="font-bold"><a href="#">Noordster</a></span>
            <span class="text-center">99%</span>
            <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}">Verder</a>
        </section>

        <section class="col-span-full grid grid-cols-3 gap-y-2 mb-16 items-center">
            <h2 class="font-bold text-center col-span-full">Tijdlijn</h2>

            <span class="font-bold"><a href="#">Roadmap</a></span>
            <span class="">
                <img class="inline" src="assets/icons/outline/collection.svg" alt="">
                Toekomst
            </span>
            <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ExerciseResultController@index', [1]) }}">Bekijken</a>

            <span class="font-bold"><a href="#">3 MIP</a></span>
            <span class="">
                <img class="inline" src="assets/icons/outline/collection.svg" alt="">
                Jezelf
            </span>
            <a class="btn btn-secondary" href="{{ action('App\Http\Controllers\ExerciseResultController@index', [1]) }}">Bekijken</a>
        </section>

        <a href="#" class="col-span-4 col-start-2 btn btn-tertiary">Accountinstellingen</a>
    </div>
@stop
