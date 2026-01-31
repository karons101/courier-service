<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| SHIPMENT CREATE
|--------------------------------------------------------------------------
*/
Route::get('/shipment/create', [ShipmentController::class, 'create'])
    ->name('shipment.create');

Route::post('/shipment/create', [ShipmentController::class, 'store'])
    ->name('shipment.store');

/*
|--------------------------------------------------------------------------
| SHIPMENT TRACKING
|--------------------------------------------------------------------------
*/
Route::get('/shipment/track', [ShipmentController::class, 'track'])
    ->name('shipment.track-form');

Route::post('/shipment/track', [ShipmentController::class, 'track'])
    ->name('shipment.track');

Route::get('/shipment/track/{tracking_id}', [ShipmentController::class, 'trackById']);
