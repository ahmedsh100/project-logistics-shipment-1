<?php

use App\Http\Controllers\Admin\ShipmentController as AdminShipmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;

Route::view('/', 'them.starter')->name('home');

Route::view('/about', 'them.about')->name('about');

Route::view('/services', 'them.service')->name('services');

Route::view('/pricing', 'them.pricing')->name('pricing');

Route::view('/get-a-quote', 'them.get-a-quote')->name('get-quote');

Route::view('/service-details', 'them.service-details')->name('service-details');

Route::view('/contact', 'them.contact')->name('contact');

Route::get('/shipments', [AdminShipmentController::class,'index']);

// Route::prefix('api')->group(function () {
//     Route::get('shipments', [ShipmentController::class, 'index']);
//     Route::get('shipments/{tracking}', [ShipmentController::class, 'showByTracking']);
//     Route::get('track', [ShipmentController::class, 'track']);
//     Route::post('shipments', [ShipmentController::class, 'store']);
//     Route::put('shipments/{tracking}', [ShipmentController::class, 'update']);
//     Route::delete('shipments/{tracking}', [ShipmentController::class, 'destroy']);
// });
