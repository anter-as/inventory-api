<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\StockTransferController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::post('/stock-transfers', [StockTransferController::class, 'store']);
});
