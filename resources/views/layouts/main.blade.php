<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-800 w-full flex flex-col items-center relative">
        <header class="w-full bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-200 flex justify-center px-4">
            <nav
                class="w-full max-w-7xl flex justify-between items-center px-4 py-4 sm:px-0 space-x-4 sm:space-x-6 lg:space-x-8 text-sm sm:text-base">
                aqui va el navbar
            </nav>
        </header>
        <main class="w-full max-w-7xl py-4 text-gray-700 dark:text-gray-200 flex-grow">
            {{ $slot }}
        </main>
        <footer class="w-full bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-200 flex justify-center px-4">
            <section class="w-full max-w-7xl h-auto py-4 flex justify-center">
                This a footer section
            </section>
        </footer>
    </div>
    {{--  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script> --}}
    @livewireScripts
</body>

</html>
