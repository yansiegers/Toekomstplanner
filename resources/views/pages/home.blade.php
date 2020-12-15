@extends('layouts.general')

@section('content')
    <div class="container mx-auto p-5 grid grid-cols-6 gap-y-8">
        <h1 class="col-span-full text-center font-bold">Plan de toekomst van je studie</h1>

        <img class="col-span-full lg:col-start-2 lg:col-span-3 lg:row-span-2" src="/assets/illustrations/undraw_Questions_re_1fy7.svg" alt="">
        <div class="col-span-4 col-start-2 lg:col-span-1">
            <p class="mb-8"><a class="btn btn-primary" href="#">Aanmelden</a></p>
            <p class="">Heb je al een account?<br><a href="/">Log hier in.</a></p>
        </div>

        @foreach ($page_texts as $page_text)
            <section class="col-span-4 col-start-2">
                @switch($page_text->heading)
                    @case('h1')
                        <h1 class="">{{ $page_text->subtitle }}</h1>
                    @break
                    @case('h2')
                        <h2 class="">{{ $page_text->subtitle }}</h2>
                    @break
                    @case('h3')
                        <h3 class="">{{ $page_text->subtitle }}</h3>
                    @break
                    @case('h4')
                        <h4 class="">{{ $page_text->subtitle }}</h4>
                    @break
                    @case('h5')
                        <h5 class="">{{ $page_text->subtitle }}</h5>
                    @break
                    @case('h6')
                        <h6 class="">{{ $page_text->subtitle }}</h6>
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
