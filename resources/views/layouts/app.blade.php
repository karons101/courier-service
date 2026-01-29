<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Service</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600">
            Courier Service
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
