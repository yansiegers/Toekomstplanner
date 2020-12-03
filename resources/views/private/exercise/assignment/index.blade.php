@php
    $page_title = 'Oefening invullen'
@endphp

@extends('layouts.personal', [
  'title' => $page_title
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <h1 class="text-xl text-center font-bold mt-5">{{ $page_title }}</h1>
        </section>

        <section class="col-span-4 col-start-2">
            <h2>Vragen</h2>
            <ol>
                @foreach ($exercise_assignments as $exercise_assignment)
                    <li>
                        <a href="{{ action('App\Http\Controllers\ExerciseAssignmentController@show', [$exercise_id, $exercise_assignment->id]) }}">
                            {{ $exercise_assignment->question }}
                            @if($exercise_assignment->answer)
                                <span>(beantwoord)</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ol>
        </section>
    </div>
@stop
