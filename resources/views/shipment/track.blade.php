@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 max-w-xl">
    <h2 class="text-2xl font-bold mb-4">Track Your Shipment</h2>

    <form action="{{ route('shipment.track') }}" method="POST" class="space-y-4 mb-6">
        @csrf
        <input
            type="text"
            name="tracking_id"
            placeholder="Enter Tracking ID"
            value="{{ old('tracking_id', session('tracking_id')) }}"
            class="border p-2 w-full rounded"
            required
        >
        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Track Shipment
        </button>
    </form>

    @if($shipment)
        <div class="border p-4 rounded bg-white shadow space-y-2">
            <p><strong>Tracking ID:</strong> {{ $shipment->tracking_id }}</p>

            <p><strong>Sender Name:</strong> {{ $shipment->sender_name }}</p>
            <p><strong>Sender Address:</strong> {{ $shipment->sender_address }}</p>

            <p><strong>Recipient Name:</strong> {{ $shipment->recipient_name }}</p>
            <p><strong>Recipient Address:</strong> {{ $shipment->recipient_address }}</p>

            <p><strong>Package Weight:</strong> {{ $shipment->weight }} kg</p>

            @if($shipment->description)
                <p><strong>Package Description:</strong> {{ $shipment->description }}</p>
            @endif

            <p><strong>Status:</strong> {{ $shipment->status }}</p>
        </div>
    @endif
</div>
@endsection
