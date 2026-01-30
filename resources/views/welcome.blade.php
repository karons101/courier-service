<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CourierXpress | courier-service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ✅ Correct production assets (DO NOT CHANGE NAMES) -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-BWlwcR_6.css') }}">
    <script type="module" src="{{ asset('build/assets/app-DURXcuKv.js') }}"></script>
</head>

<!-- ✅ Kill horizontal scrolling on mobile -->
<body class="m-0 p-0 overflow-x-hidden">

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
    x-init="setInterval(() => active = (active + 1) % slides.length, 5000)"
    class="relative min-h-screen w-full overflow-hidden"
>

    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div
            x-show="active === index"
            x-transition.opacity.duration.1000ms
            class="absolute inset-0 bg-cover bg-center"
            :style="`background-image: url(${slide})`"
        ></div>
    </template>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <!-- Content -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-4">
        <div class="text-center text-white max-w-xl w-full">

            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                CourierXpress
            </h1>

            <p class="text-base md:text-xl mb-6">
                Fast, secure, and reliable courier services for individuals and businesses.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/shipment/create"
                   class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg text-lg font-semibold transition">
                    Create Shipment
                </a>

                <a href="/shipment/track-form"
                   class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded-lg text-lg font-semibold transition">
                    Track Shipment
                </a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
