<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shipment;

class ShipmentSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data into the shipments table
        Shipment::create([
            'shipment_id' => 'SHIP001',
            'armada_id' => 1,  // Assuming Armada with ID 1 exists
            'shipping_order_id' => 1,  // Assuming ShippingOrder with ID 1 exists
            'date' => '2025-04-20',
            'dep_loc' => 'New York',
            'des_loc' => 'Los Angeles',
            'status' => 'pending',
            'detail' => 'Fragile goods, handle with care.',
            'shipping_log' => 'Shipment dispatched from New York, in transit.',
        ]);

        Shipment::create([
            'shipment_id' => 'SHIP002',
            'armada_id' => 2,  // Assuming Armada with ID 2 exists
            'shipping_order_id' => 2,  // Assuming ShippingOrder with ID 2 exists
            'date' => '2025-04-21',
            'dep_loc' => 'Chicago',
            'des_loc' => 'Houston',
            'status' => 'departed',
            'detail' => 'Electronics, expedited delivery.',
            'shipping_log' => 'Shipment departed from Chicago, in transit.',
        ]);

        Shipment::create([
            'shipment_id' => 'SHIP003',
            'armada_id' => 3,  // Assuming Armada with ID 3 exists
            'shipping_order_id' => 3,  // Assuming ShippingOrder with ID 3 exists
            'date' => '2025-04-22',
            'dep_loc' => 'San Francisco',
            'des_loc' => 'Seattle',
            'status' => 'delivered',
            'detail' => 'Heavy machinery for construction.',
            'shipping_log' => 'Shipment delivered to Seattle, unloading.',
        ]);

        // You can add more shipment data as needed
    }
}
