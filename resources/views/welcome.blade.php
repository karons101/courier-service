<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Mobile first, prevent zoom/layout delay -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>CourierXpress | Courier-Service</title>

    <!-- Fonts (non-blocking) -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Vite assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans text-gray-900 overflow-x-hidden m-0 p-0">

<!-- HERO / CAROUSEL -->
<div
    x-data="{
        slides: [
            '/images/slide1.jpg',
            '/images/slide2.jpg',
            '/images/slide3.jpg',
            '/images/slide4.jpg'
        ],
        active: 0
    }"
    x-init="
        requestIdleCallback(() => {
            setInterval(() => {
                active = (active + 1) % slides.length
            }, 5000)
        })
    "
    class="relative min-h-screen w-full overflow-hidden"
>

    <!-- BACKGROUND -->
    <div
        class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000"
        :style="`background-image: url(${slides[active]})`"
    ></div>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- CONTENT -->
    <div class="relative z-10 min-h-screen flex flex-col items-center justify-center w-full px-4 text-center text-white">

        <h1 class="text-4xl md:text-6xl font-bold mb-4">
            CourierXpress
        </h1>

        <p class="text-lg md:text-xl mb-8 max-w-xl">
            Fast, secure, and reliable courier services for individuals and businesses.
        </p>

        <div class="flex gap-4 flex-wrap justify-center">
            <a href="{{ route('shipment.create') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 px-8 py-3 rounded-lg text-lg font-semibold transition">
                Create Shipment
            </a>

            <a href="{{ route('shipment.track-form') }}"
               class="inline-block bg-green-600 hover:bg-green-700 px-8 py-3 rounded-lg text-lg font-semibold transition">
                Track Shipment
            </a>
        </div>

    </div>
</div>

</body>
</html>
