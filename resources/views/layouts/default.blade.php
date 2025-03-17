<!DOCTYPE html>
<html class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full flex flex-col">
        <header class="bg-white shadow-sm">
            <x-navbar />
        </header>
        <main class="container mx-auto py-8 px-4 sm:px-6 lg:px-8 flex-grow">
            @yield('content')
        </main>
        <x-footer />
    </body>
</html>
