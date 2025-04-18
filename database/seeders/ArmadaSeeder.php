<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Armada;

class ArmadaSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data into the armadas table
        Armada::create([
            'armada_id' => 'ARM001',
            'type' => 'truck',
            'availability' => true,
            'capacity' => 10,
        ]);

        Armada::create([
            'armada_id' => 'ARM002',
            'type' => 'plane',
            'availability' => false,
            'capacity' => 50,
        ]);

        Armada::create([
            'armada_id' => 'ARM003',
            'type' => 'ship',
            'availability' => true,
            'capacity' => 200,
        ]);

        // You can add more armada data here if needed
    }
}
