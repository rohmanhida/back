<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShippingOrder;

class ShippingOrderSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data into the shipping_orders table
        ShippingOrder::create([
            'order_id' => 'SO001',
            'name' => 'John Doe',
            'vehicle_type' => 'truck',
            'date' => '2025-04-20',
            'detail' => 'Urgent delivery of goods to warehouse.',
            'order_status' => 'not paid',
        ]);

        ShippingOrder::create([
            'order_id' => 'SO002',
            'name' => 'Alice Smith',
            'vehicle_type' => 'plane',
            'date' => '2025-04-21',
            'detail' => 'Delivering electronics to the overseas market.',
            'order_status' => 'not paid',
        ]);

        ShippingOrder::create([
            'order_id' => 'SO003',
            'name' => 'Bob Johnson',
            'vehicle_type' => 'ship',
            'date' => '2025-04-22',
            'detail' => 'Large cargo shipment to the east coast.',
            'order_status' => 'ordered',
        ]);

        // You can add more shipping order data as needed
    }
}

