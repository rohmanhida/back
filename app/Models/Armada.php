<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    protected $connection = 'sqlite';
    protected $fillable = [ 'armada_id', 'type', 'availability', 'capacity'];
    protected $attributes = [
        'type' => '[truck, plane, ship]',
        'availability' => false,
    ];
}
