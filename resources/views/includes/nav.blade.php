<nav class="container bg-tp-plants font-sans flex justify-between p-5">
    <span class="font-bold">
        <a class="no-link" href="{{ $personal ? '/' : '/dashboard' }}">
            {{ $personal ? 'Mijn' : '' }} Toekomstplanner
        </a>
    </span>
    <a href="/menu">
        <img src="assets/icons/outline/menu.svg" alt="Menu icon">
    </a>
</nav>
