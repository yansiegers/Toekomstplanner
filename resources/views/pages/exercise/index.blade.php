@php
    $page_title = 'Oefeningen'
@endphp

@extends('layouts.general', [
  'title' => $page_title
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <h1 class="text-xl text-center font-bold mt-5">{{ $page_title }}</h1>

            <ol class="list-disc list-inside">
                @foreach ($exercises as $exercise)
                    <li>
                        <a href="{{ action('App\Http\Controllers\ExerciseController@show', [$exercise->id]) }}">
                            {{ $exercise->exercise_intro->title }}
                        </a>
                    </li>
                @endforeach
            </ol>
        </section>
    </div>
@stop
