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
        <link rel="apple-touch-icon" href="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/css/templatemo.css">
    <link rel="stylesheet" href="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/css/custom.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/css/fontawesome.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
