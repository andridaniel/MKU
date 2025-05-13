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

        {{-- Google Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Boldonse&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased ">
        <div class="min-h-screen bg-gray-700">
            @include('layouts.navigation')

           <div class="mt-2 flex justify-end">
                @if (session()->has('success'))

                    <div id="success-alert" class="m-2 flex w-[300px] justify-end bg-green-600 rounded-md">
                        <p class="text-white text-center mx-auto p-2">{{ session()->get('success') }}</p> 
                    </div>
                   
                @endif

                @if (session()->has('error'))

                    <div id="error-alert" class="m-2 flex w-[300px] justify-end bg-red-600 rounded-md">
                        <p class="text-white text-center mx-auto p-2">{{ session()->get('error') }}</p> 
                    </div>
                @endif


                <script>
                    // Success
                    const successAlert = document.getElementById('success-alert');
                    if (successAlert) {
                        setTimeout(() => {
                            successAlert.style.display = 'none';
                        }, 3000); // 3 detik
                    }
                
                    // Error
                    const errorAlert = document.getElementById('error-alert');
                    if (errorAlert) {
                        setTimeout(() => {
                            errorAlert.style.display = 'none';
                        }, 3000); // 3 detik
                    }
                </script>
                
           </div>
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
