<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test de Personnalité</title>


    <style>
        [x-cloak]{
            display:none;
        }
    </style>

    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @yield('core.header')
    @yield('core.body')
    @yield('core.footer')

    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>

