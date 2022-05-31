<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel livewire</title>
        @livewireStyles
    </head>
    <body class="antialiased">
        @livewire('hello-world', ['name' => 'Dmitriy']) {{--create component php artisan make:livewire hello-world--}}
        @livewireScripts
    </body>
</html>
