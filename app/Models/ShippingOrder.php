<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingOrder extends Model
{
    protected $connection = 'sqlite';
    protected $fillable = [ 'order_id', 'name', 'vehicle_type', 'date', 'detail', 'order_status' ];
}
