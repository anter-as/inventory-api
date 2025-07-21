<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\StockTransferController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::post('/stock-transfers', [StockTransferController::class, 'store']);
    Route::get('/warehouses/{id}/inventory', [WarehouseController::class, 'inventory']);
});
