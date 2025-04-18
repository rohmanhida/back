<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Armada;
use App\Models\ShippingOrder;
use App\Models\Shipment;

class ShipmentController extends Controller
{
    //
    public function index(Request $request)
    {
        $shipment = Shipment::all();
        return response()->json($shipment);
    }
}
