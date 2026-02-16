<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShipmentRequest;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::query()->with('customer')->paginate(20);
        return response()->json($shipments);
    }

    public function store(ShipmentRequest $request)
    {
        $data = $request->validated();

        $shipment = Shipment::create($data);
        $shipment->load('customer');
        return response()->json($shipment, 201);
    }

    public function showByTracking(string $tracking)
    {
        $shipment = Shipment::with('customer')->where('tracking_number', $tracking)->first();
        if (!$shipment) {
            return response()->json(['message' => 'Shipment not found'], 404);
        }
        return response()->json($shipment);
    }

    public function track(ShipmentRequest $request)
    {
        $tracking = $request->query('tracking');
        if (!$tracking) {
            return response()->json(['message' => 'Tracking number is required'], 422);
        }
        return $this->showByTracking($tracking);
    }

    public function update(ShipmentRequest $request, string $tracking)
    {
        $shipment = Shipment::where('tracking_number', $tracking)->first();
        if (!$shipment) {
            return response()->json(['message' => 'Shipment not found'], 404);
        }

        $data = $request->validated();

        $shipment->update($data);
        $shipment->load('customer');
        return response()->json($shipment);
    }

    public function destroy(string $tracking)
    {
        $shipment = Shipment::where('tracking_number', $tracking)->first();
        if (!$shipment) {
            return response()->json(['message' => 'Shipment not found'], 404);
        }
        $shipment->delete();
        return response()->json(null, 204);
    }
}
