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
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900 dark:bg-gray-900">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-200 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg mb-10 d-flex">
                <div class="">
                    <a class="" href="/">
                        <img class="mx-auto p2"src="https://i.postimg.cc/jqgFNTnj/DALL-E-2024-10-31-11-41-11-A-minimalistic-logo-with-the-text-SIMCREDIT-in-modern-sans-serif-fon-proc.png" style="width: 250px"/>
                        
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
