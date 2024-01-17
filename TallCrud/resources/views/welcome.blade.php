<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased">
    <h1 class="text-3xl">Hola Laravel</h1>
    <div x-data="{ count: 0 }">
        <button @click="count++">Add</button>
        <span x-text="count">0</span>
    </div>

    <livewire:counter>
@livewireScripts
</body>

</html>
