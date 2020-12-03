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
            @foreach ($exercise_results as $exercise_result)
                <h2>{{ $exercise_result->question }}</h2>
                <p>{{ $exercise_result->answer }}</p>
            @endforeach
        </section>

    </div>
@stop
