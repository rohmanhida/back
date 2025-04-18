<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('shipping_orders', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('order_id')->unique(); // Unique order identifier
            $table->string('name'); // Name of the order (could be customer name, etc.)
            $table->string('vehicle_type'); // Type of vehicle (truck, plane, etc.)
            $table->date('date')->nullable(); // Nullable date of the order
            $table->text('detail')->nullable(); // Optional details about the order
            $table->string('order_status')->default('pending'); // Default order status (can be changed later)
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipping_orders');
    }
}
