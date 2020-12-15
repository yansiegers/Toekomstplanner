@extends('layouts.general', [
  'title' => $exercise_intro->title
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <h1 class="col-span-full text-center font-bold">Oefening: {{ $exercise_intro->title }}</h1>

        <img class="col-span-full lg:col-start-2 lg:col-span-3 lg:row-span-2" src="/assets/images/forest-1245692_1920.jpg" alt="">
        <ul class="col-span-full lg:col-start-2 lg:col-span-3 lg:row-span-2 flex justify-around">
            <li>
                <img class="inline mr-1" src="/assets/icons/outline/clock.svg" alt="">
                {{ $exercise_intro->duration }} min.
            </li>
            <li>
                <img class="inline mr-1" src="/assets/icons/outline/light-bulb.svg" alt="">
                {{ $exercise_intro->difficulty }}
            </li>
            <li>
                <img class="inline mr-1" src="/assets/icons/outline/collection.svg" alt="">
                {{ $exercise_intro->category }}
            </li>
            {{--<li>{{ $exercise_intro->created_at }}</li>--}}
        </ul>

        <div class="col-span-4 col-start-2 lg:col-span-1">
            <a class="btn btn-primary block" href="{{ route('oefeningen.invullen.index', [1]) }}">Oefening starten</a>
        </div>

        <section class="col-start-2 col-span-4">
            <p>{{ $exercise_intro->text }}</p>
        </section>
    </div>
@stop
