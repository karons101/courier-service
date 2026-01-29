<!DOCTYPE html>
<html>
<head>
    <title>Shipment Created</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded shadow text-center">
    <h1 class="text-2xl font-bold text-green-700 mb-4">
        Shipment Created Successfully!
    </h1>

    <p class="mb-4">Your Tracking ID is: <span class="font-bold text-blue-600">{{ session('tracking_id') }}</span></p>

    <a href="/" class="text-blue-600 underline">Back to Home</a>
    <br>
    <a href="{{ url('/shipment/track/' . session('tracking_id')) }}" class="mt-2 inline-block text-white bg-blue-600 px-4 py-2 rounded">
        Track Shipment
    </a>

</div>

</body>
</html>
