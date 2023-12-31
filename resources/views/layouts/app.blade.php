<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @livewireStyles
    <title> {{env('APP_NAME')}} </title>
</head>
<body class="h-full">

<div class="min-h-full">
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900"> {{ $title }} </h1>
        </div>
    </header>
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>
