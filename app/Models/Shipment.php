<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $connection = 'sqlite';
    protected $fillable = [ 'shipment_id', 'armada_id', 'shipping_order_id', 'date', 'dep_loc', 'des_loc', 'status', 'detail', 'shipping_log' ];
}
