<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Net Pizzéria')</title>
</head>
<body>
    @include('partials.nav')

    <main>
        @if(session('status'))
            <p>{{ session('status') }}</p>
        @endif

        @yield('content')
    </main>
</body>
</html>