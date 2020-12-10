@extends('layouts.personal', [
  'title' => 'Dashboard'
])

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <h1 class="text-xl text-center font-bold mt-5">Dashboard</h1>
        </section>

        <section class="col-span-full grid grid-cols-3 gap-y-2 mb-16 items-center">
            <h2 class="font-bold text-center col-span-full">Ga verder waar je gebleven bent</h2>

            <span class="font-bold">Mijn jaarplan</span>
            <span class="text-center">Niet gestart</span>
            <a href="#" class="btn btn-secondary">Starten</a>

            <span class="font-bold">Ikigai</span>
            <span class="text-center">20%</span>
            <a href="#" class="btn btn-secondary">Verder</a>

            <span class="font-bold">Wie ben ik?</span>
            <span class="text-center">60%</span>
            <a href="#" class="btn btn-secondary">Verder</a>

            <span class="font-bold">Noordster</span>
            <span class="text-center">99%</span>
            <a href="#" class="btn btn-secondary">Verder</a>
        </section>

        <section class="col-span-full grid grid-cols-3 gap-y-2 mb-16 items-center">
            <h2 class="font-bold text-center col-span-full">Tijdlijn</h2>

            <span class="font-bold">Roadmap</span>
            <span class="">
                <img class="inline" src="assets/icons/outline/collection.svg" alt="">
                Toekomst
            </span>
            <a href="#" class="btn btn-secondary">Bekijken</a>

            <span class="font-bold">3 MIP</span>
            <span class="">
                <img class="inline" src="assets/icons/outline/collection.svg" alt="">
                Jezelf
            </span>
            <a href="#" class="btn btn-secondary">Bekijken</a>
        </section>

        <a href="#" class="col-span-4 col-start-2 btn btn-tertiary">Accountinstellingen</a>
    </div>
@stop
