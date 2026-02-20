<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::with('customer')->latest()->paginate(15);
        return view('dashboard.shipments.index', compact('shipments'));
    }
}

