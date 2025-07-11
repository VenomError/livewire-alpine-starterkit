<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        @vite('resources/js/app.js')
        @livewireStyles
    </head>
    <body>
        <center>
            {{ $slot }}
        </center>

       @livewireScriptConfig
    </body>
</html>
