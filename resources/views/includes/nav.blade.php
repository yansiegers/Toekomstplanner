<div class="bg-tp-plants font-sans mb-8">
    <nav class="container mx-auto p-5 flex justify-between items-center">
        <a class="no-link text-2xl font-bold" href="/">Toekomstplanner</a>
        <ol class="lg:flex items-center hidden">
            <li class="px-5 text-xl">
                <a class="no-link" href="/">
                    <img class="inline mr-2" src="/assets/icons/outline/light-bulb.svg" alt="">Oefeningen
                </a>
            </li>
            <li class="px-5 text-xl">
                <a class="no-link" href="/">
                    <img class="inline mr-2" src="/assets/icons/outline/book-open.svg" alt="">Blog
                </a>
            </li>
        </ol>
        <a class="btn btn-secondary hidden lg:inline-block" href="{{ route('oefeningen.invullen.index', [1]) }}">
            <img class="inline mr-1" src="/assets/icons/outline/key.svg" alt="">Inloggen
        </a>
        <a class="flex lg:hidden" href="{{ route('menu') }}">
            <img src="/assets/icons/outline/menu.svg" alt="Menu icon">
        </a>
    </nav>
</div>
