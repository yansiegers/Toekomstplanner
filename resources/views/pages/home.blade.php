@extends('layouts.general')

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <section class="col-span-full">
            <img class="" src="/assets/illustrations/undraw_Questions_re_1fy7.svg" alt="">
            <h1 class="text-xl text-center font-bold mt-5">Plan de toekomst van je studie</h1>
        </section>

        <button class="btn btn-primary col-span-4 col-start-2">Aanmelden</button>
        <p class="col-span-4 col-start-2">Heb je al een account? <a href="/">Log hier in.</a></p>

        @foreach ($page_texts as $page_text)
            <section class="col-span-4 col-start-2">
                @switch($page_text->heading)
                    @case('h1')
                        <h1 class="font-bold">{{ $page_text->subtitle }}</h1>
                    @break
                    @case('h2')
                        <h2 class="font-bold">{{ $page_text->subtitle }}</h2>
                    @break
                    @case('h3')
                        <h3 class="font-bold">{{ $page_text->subtitle }}</h3>
                    @break
                    @case('h4')
                        <h4 class="font-bold">{{ $page_text->subtitle }}</h4>
                    @break
                    @case('h5')
                        <h5 class="font-bold">{{ $page_text->subtitle }}</h5>
                    @break
                    @case('h6')
                        <h6 class="font-bold">{{ $page_text->subtitle }}</h6>
                    @break
                    @case('bold')
                        <span class="font-bold">{{ $page_text->subtitle }}</span>
                    @break
                @endswitch
                <p class="pb-5">{{ $page_text->text }}</p>
            </section>
        @endforeach
    </div>
@stop
