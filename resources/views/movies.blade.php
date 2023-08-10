<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Riccardo Basso">
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/dc-logo.png') }}" />
    <title>DC - The Official Home of DC</title>
    <style>
        body {
            display: none
        }
    </style>
    {{-- importazione asset --}}
    @vite('resources/js/app.js')
</head>

<body>
    {{-- header --}}
    @include('partials.header')

    {{-- main --}}
    @include('partials.main')

    {{-- footer --}}
    @include('partials.footer')
</body>

</html>
