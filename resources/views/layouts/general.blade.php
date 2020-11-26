<!DOCTYPE html>
<html lang="nl">
@include('includes.head')

<body class="bg-white">

    @include('includes.nav', ['personal' => false])

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

</body>
</html>
