<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShipmentController extends Controller
{
    /**
     * Show create shipment form
     */
    public function create()
    {
        return view('shipment.create');
    }

    /**
     * Store shipment and redirect to details page
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_name'        => 'required|string|max:255',
            'sender_address'     => 'required|string|max:500',
            'recipient_name'     => 'required|string|max:255',
            'recipient_address'  => 'required|string|max:500',
            'weight'             => 'required|numeric|min:0.1',
            'description'        => 'nullable|string|max:1000',
        ]);

        $trackingId = 'TRK-' . strtoupper(Str::random(10));

        $shipment = Shipment::create([
            'sender_name'        => $validated['sender_name'],
            'sender_address'     => $validated['sender_address'],
            'recipient_name'     => $validated['recipient_name'],
            'recipient_address'  => $validated['recipient_address'],
            'weight'             => $validated['weight'],
            'description'        => $validated['description'] ?? null,
            'tracking_id'        => $trackingId,
            'status'             => 'Pending',
        ]);

        // Redirect directly to shipment details / tracking result page
        return redirect()->route('shipment.track', [
            'tracking_id' => $shipment->tracking_id
        ]);
    }

    /**
     * Track shipment (form + result)
     */
    public function track(Request $request)
    {
        $shipment = null;

        if ($request->filled('tracking_id')) {
            $shipment = Shipment::where('tracking_id', $request->tracking_id)->first();
        }

        return view('shipment.track', compact('shipment'));
    }

    /**
     * Track shipment by URL
     */
    public function trackById(string $tracking_id)
    {
        $shipment = Shipment::where('tracking_id', $tracking_id)->firstOrFail();

        return view('shipment.track', compact('shipment'));
    }
}
