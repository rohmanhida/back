<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Armada;
use App\Models\ShippingOrder;
use App\Models\Shipment;

class ShippingOrderController extends Controller
{
    //
    public function index(Request $request)
    {
        $shippingorder = ShippingOrder::all();
        return response()->json($shippingorder);
    }
}
