<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- @livewireStyles --}}
        <style>
            [x-cloak] {display: none !important;}
        </style>
    </head>
    <body class="p-10">
        <div x-data="{ open: false}">
            <button @click="open = !open" class="px-4 py-2 text-white bg-indigo-700 rounded-md" :class="{'bg-green-400': open}">Abrir</button>
            <div x-cloak class="p-4 mt-5 bg-gray-300 rounded-md w-80" x-show="open">
                Conteudo
            </div>
        </div>
        {{-- @livewireScripts --}}
    </body>
</html>
