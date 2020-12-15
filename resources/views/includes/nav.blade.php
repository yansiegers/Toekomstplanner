<div class="bg-tp-plants font-sans mb-8">
    <nav class="container mx-auto bg-tp-plants flex justify-between p-5">
        <span class="text-2xl font-bold">
            <a class="no-link" href="{{ $personal ? '/' : '/dashboard' }}">
                {{ $personal ? 'Mijn' : '' }} Toekomstplanner
            </a>
        </span>
        <a class="flex" href="{{ route('menu') }}">
            <img class="align-middle" src="/assets/icons/outline/menu.svg" alt="Menu icon">
        </a>
    </nav>
</div>
