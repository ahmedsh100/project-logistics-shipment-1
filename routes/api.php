<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;

Route::get('shipments', [ShipmentController::class, 'index']);
Route::get('shipments/{tracking}', [ShipmentController::class, 'showByTracking']);
Route::get('track', [ShipmentController::class, 'track']);
Route::post('shipments', [ShipmentController::class, 'store']);
Route::put('shipments/{tracking}', [ShipmentController::class, 'update']);
Route::delete('shipments/{tracking}', [ShipmentController::class, 'destroy']);

