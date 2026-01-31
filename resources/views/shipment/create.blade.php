@extends('layouts.guest')

@section('content')
<div class="max-w-2xl w-full bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Create Shipment</h1>

    <!-- Correct route usage -->
    <form action="{{ route('shipment.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Sender Information -->
        <div>
            <label for="sender_name" class="block text-gray-700 font-medium">Sender Name</label>
            <input type="text" name="sender_name" id="sender_name" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="sender_address" class="block text-gray-700 font-medium">Sender Address</label>
            <input type="text" name="sender_address" id="sender_address" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Recipient Information -->
        <div>
            <label for="recipient_name" class="block text-gray-700 font-medium">Recipient Name</label>
            <input type="text" name="recipient_name" id="recipient_name" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="recipient_address" class="block text-gray-700 font-medium">Recipient Address</label>
            <input type="text" name="recipient_address" id="recipient_address" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Package Details -->
        <div>
            <label for="weight" class="block text-gray-700 font-medium">Package Weight (kg)</label>
            <input type="number" step="0.01" name="weight" id="weight" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="description" class="block text-gray-700 font-medium">Package Description</label>
            <textarea name="description" id="description" rows="3"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-lg transition">
                Create Shipment
            </button>
        </div>
    </form>
</div>
@endsection
