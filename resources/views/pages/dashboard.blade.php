@extends('layouts.personal', [
  'title' => 'Dashboard'
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <h1 class="text-xl text-center font-bold mt-5">Dashboard</h1>
        </section>

        <section class="col-span-full grid grid-cols-3 gap-y-2 mb-16">
            <h2 class="font-bold text-center col-span-full">Ga verder waar je gebleven bent</h2>

            <span class="font-bold">Mijn jaarplan</span>
            <span class="text-center">Niet gestart</span>
            <a href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}" class="text-center border">Starten</a>

            <span class="font-bold">Ikigai</span>
            <span class="text-center">20%</span>
            <a href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}" class="text-center border">Verder</a>

            <span class="font-bold">Wie ben ik?</span>
            <span class="text-center">60%</span>
            <a href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}" class="text-center border">Verder</a>

            <span class="font-bold">Noordster</span>
            <span class="text-center">99%</span>
            <a href="{{ action('App\Http\Controllers\ExerciseAssignmentController@index', [1]) }}" class="text-center border">Verder</a>
        </section>

        <section class="col-span-full grid grid-cols-3 gap-y-2 mb-16">
            <h2 class="font-bold text-center col-span-full">Tijdlijn</h2>

            <span class="font-bold">Roadmap</span>
            <span class="">
                <img class="inline" src="assets/icons/outline/collection.svg" alt="">
                Toekomst
            </span>
            <a href="{{ action('App\Http\Controllers\ExerciseResultController@index', [1]) }}" class="text-center border">Bekijken</a>

            <span class="font-bold">3 MIP</span>
            <span class="">
                <img class="inline" src="assets/icons/outline/collection.svg" alt="">
                Jezelf
            </span>
            <a href="{{ action('App\Http\Controllers\ExerciseResultController@index', [1]) }}" class="text-center border">Bekijken</a>
        </section>

        <button class="col-span-4 col-start-2 text-center border">Accountinstellingen</button>
    </div>
@stop
