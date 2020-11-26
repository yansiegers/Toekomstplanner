<!DOCTYPE html>
<html lang="nl">
<head>
    @include('includes.head')
</head>
<body class="bg-gray-500">

    @include('includes.nav')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

</body>
</html>
