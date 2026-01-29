@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Create Shipment</h2>
    <form action="{{ route('shipment.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="sender_name" placeholder="Sender Name" class="border p-2 w-full rounded" required>
        <input type="text" name="receiver_name" placeholder="Receiver Name" class="border p-2 w-full rounded" required>
        <input type="text" name="receiver_address" placeholder="Receiver Address" class="border p-2 w-full rounded" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Create Shipment
        </button>
    </form>
</div>
@endsection