@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Track Your Shipment</h2>
    <form action="{{ route('shipment.track') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="tracking_id" placeholder="Enter Tracking ID"
               class="border p-2 w-full rounded" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Track Shipment
        </button>
    </form>
</div>
@endsection