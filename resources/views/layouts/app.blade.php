<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Standing Desks Ltd')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
