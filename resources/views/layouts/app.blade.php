<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('Sistem Informasi Komputer(MKU)', 'Sistem Informasi Komputer(MKU)') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            @if (session()->has('success'))
                <div id="alert-success"
                    class="flex mx-auto items-end justify-between w-full max-w-lg  p-4 mb-4 text-sm text-white bg-green-600 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                        </svg>
                        <span>{{ session()->get('success') }}</span>
                    </div>
                    <button onclick="document.getElementById('alert-success').remove()"
                        class="ml-4 text-white focus:outline-none">
                        ✖
                    </button>
                </div>
            @endif

            @if (session()->has('error'))
                <div id="alert-error"
                    class="flex items-end justify-between w-full max-w-lg  p-4 mb-4 text-sm text-white bg-red-600 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4A9 9 0 1 1 21 12a9 9 0 0 1-15.938 7z"></path>
                        </svg>
                        <span>{{ session()->get('error') }}</span>
                    </div>
                    <button onclick="document.getElementById('alert-error').remove()"
                        class="ml-4 text-white focus:outline-none">
                        ✖
                    </button>
                </div>
            @endif
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
