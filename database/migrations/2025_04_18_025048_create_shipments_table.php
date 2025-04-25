<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('shipment_id')->unique(); // Unique shipment identifier
            $table->unsignedBigInteger('armada_id'); // FK to armadas table
            $table->unsignedBigInteger('shipping_order_id'); // FK to orders table (assumption)
            $table->date('date')->nullable(); // Nullable shipping date
            $table->string('dep_loc'); // Departure location
            $table->string('des_loc'); // Destination location
            $table->string('status')->default('pending'); // Default status
            $table->text('detail')->nullable(); // Optional shipment details
            $table->text('shipping_log')->nullable(); // Optional log data (e.g., JSON or text)
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints (optional if you want relationships)
            // $table->foreign('armada_id')->references('id')->on('armadas')->onDelete('cascade');
            // $table->foreign('shipping_order_id')->references('id')->on('shipping_orders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
