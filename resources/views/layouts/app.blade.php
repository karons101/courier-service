<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CourierXpress | Courier-Service</title>

    <!-- Fonts (non-blocking) -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    >

    <!-- Vite (load once, optimized) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans text-gray-900 overflow-x-hidden">

    <nav class="bg-white shadow p-4 flex flex-col md:flex-row justify-between items-center w-full">
        <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600 mb-2 md:mb-0">
            CourierXpress
        </a>

        <div class="space-x-4 flex flex-row">
            <a href="{{ route('shipment.create') }}" class="text-gray-700 hover:text-blue-600">
                Create Shipment
            </a>

            <a href="{{ route('shipment.track-form') }}" class="text-gray-700 hover:text-blue-600">
                Track Shipment
            </a>
        </div>
    </nav>

    <main class="py-8 w-full max-w-6xl mx-auto px-4 md:px-6">
        @yield('content')
    </main>

</body>
</html>
