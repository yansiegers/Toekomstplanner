<nav class="container bg-tp-plants flex justify-between p-5">
    <span class="font-bold">
        <a href="{{ $personal ? '/' : '/dashboard' }}">
            {{ $personal ? 'Mijn' : '' }} Toekomstplanner
        </a>
    </span>
    <a href="{{ route('menu') }}">
        <img src="/assets/icons/outline/menu.svg" alt="Menu icon">
    </a>
</nav>
