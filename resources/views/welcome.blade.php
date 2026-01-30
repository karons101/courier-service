@extends('layouts.app')

@section('content')
<div class="relative min-h-screen overflow-hidden">

    <!-- Hero slides -->
    <div x-data="{ slides: ['/images/slide1.jpg','/images/slide2.jpg','/images/slide3.jpg','/images/slide4.jpg'], active: 0 }"
         x-init="setInterval(() => active = (active + 1) % slides.length, 5000)"
         class="absolute inset-0">
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="active === index" x-transition.opacity.duration.1000ms
                 class="absolute inset-0 bg-cover bg-center"
                 :style="`background-image: url(${slide})`"></div>
        </template>

        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    </div>

    <!-- Hero content -->
    <div class="relative z-10 min-h-screen flex items-center justify-center">
        <div class="text-center text-white px-6 max-w-2xl">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">CourierXpress</h1>
            <p class="text-lg md:text-xl mb-6">
                Fast, secure, and reliable courier services for individuals and businesses.
            </p>
            <a href="{{ route('shipment.create') }}" 
               class="inline-block bg-blue-600 hover:bg-blue-700 px-8 py-3 rounded-lg text-lg font-semibold transition">
                Create Shipment
            </a>
        </div>
    </div>

</div>
@endsection