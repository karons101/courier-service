<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShipmentController extends Controller
{
    public function create()
    {
        return view('shipment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string|max:255',
            'receiver_name' => 'required|string|max:255',
            'receiver_address' => 'required|string|max:500',
        ]);

        $trackingId = 'TRK' . strtoupper(Str::random(12));

        Shipment::create([
            'sender_name' => $request->sender_name,
            'receiver_name' => $request->receiver_name,
            'receiver_address' => $request->receiver_address,
            'tracking_id' => $trackingId,
            'status' => 'Pending...',
        ]);

        return redirect()->route('shipment.track-form')
            ->with('tracking_id', $trackingId);
    }

    public function track(Request $request)
    {
        $shipment = null;

        if ($request->filled('tracking_id')) {
            $shipment = Shipment::where('tracking_id', $request->tracking_id)->first();
        }

        return view('shipment.track', compact('shipment'));
    }

    public function trackById(string $tracking_id)
    {
        $shipment = Shipment::where('tracking_id', $tracking_id)->firstOrFail();

        return view('shipment.track', compact('shipment'));
    }
}