<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArmadaController;
use App\Http\Controllers\Api\ShippingOrderController;
use App\Http\Controllers\Api\ShipmentController;

Route::get('/api/armada', [ArmadaController::class, 'index']);
Route::get('/api/armada/create', [ArmadaController::class, 'create']);
Route::get('/api/armada/update', [ArmadaController::class, 'update']);
Route::get('/api/armada/remove', [ArmadaController::class, 'remove']);
Route::get('/api/shippingorder', [ShippingOrderController::class, 'index']);
Route::get('/api/shippingorder/create', [ShippingOrderController::class, 'create']);
Route::get('/api/shippingorder/update', [ShippingOrderController::class, 'update']);
Route::get('/api/shippingorder/remove', [ShippingOrderController::class, 'remove']);
Route::get('/api/shipment', [ShipmentController::class, 'index']);
Route::get('/api/shipment/create', [ShipmentController::class, 'create']);
Route::get('/api/shipment/update', [ShipmentController::class, 'update']);
Route::get('/api/shipment/remove', [ShipmentController::class, 'remove']);
