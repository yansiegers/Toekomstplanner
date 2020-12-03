@extends('layouts.general', [
  'title' => $exercise_intro->title
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <h1 class="text-xl text-center font-bold mt-5">Oefening: {{ $exercise_intro->title }} ({{ $exercise_intro->id }})</h1>
            <ul>
                <li>Categorie: {{ $exercise_intro->category }}</li>
                <li>Tijdsduur: {{ $exercise_intro->duration }} minuten</li>
                <li>Moeilijkheid: {{ $exercise_intro->difficulty }}</li>
                <li>{{ $exercise_intro->created_at }}</li>
            </ul>
        </section>
        <a class="col-span-4 col-start-2 text-center border" href="{{  route('oefeningen.invullen.index', [1]) }}">Starten</a>

        <section class="col-start-2 col-span-4">
            <p>{{ $exercise_intro->text }}</p>
        </section>
    </div>
@stop
