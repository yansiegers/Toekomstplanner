@php
    $page_title = 'Oefeningvraag invullen'
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
            <h2>{{ $exercise_assignment->question }}</h2>
            <p>{{ $exercise_assignment->answer }}</p>
        </section>
    </div>
@stop
