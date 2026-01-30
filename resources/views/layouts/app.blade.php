<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CourierXpress') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-BWlwcR_6.css') }}">
    <script type="module" src="{{ asset('build/assets/app-DURXcuKv.js') }}"></script>
</head>
<body class="font-sans antialiased bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600">
            CourierXpress
        </a>

        <div class="space-x-4">
            <a href="{{ route('shipment.create') }}" class="text-gray-700 hover:text-blue-600">
                Create Shipment
            </a>
            <a href="{{ route('shipment.track-form') }}" class="text-gray-700 hover:text-blue-600">
                Track Shipment
            </a>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <main class="py-8">
        @yield('content')
    </main>

</body>
</html>