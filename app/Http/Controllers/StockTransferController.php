<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\StockTransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockTransferController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'inventory_item_id' => 'required|exists:inventory_items,id',
            'from_warehouse_id' => 'required|exists:warehouses,id',
            'to_warehouse_id' => 'required|exists:warehouses,id|different:from_warehouse_id',
            'quantity' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();

        try {
            // Get stock from source warehouse
            $sourceStock = Stock::where('warehouse_id', $data['from_warehouse_id'])
                ->where('inventory_item_id', $data['inventory_item_id'])
                ->lockForUpdate()
                ->first();

            if (!$sourceStock || $sourceStock->quantity < $data['quantity']) {
                throw ValidationException::withMessages([
                    'quantity' => 'Not enough stock in source warehouse.',
                ]);
            }

            // Subtract from source
            $sourceStock->decrement('quantity', $data['quantity']);

            // Add to destination (or create new stock row)
            $destinationStock = Stock::firstOrCreate(
                [
                    'warehouse_id' => $data['to_warehouse_id'],
                    'inventory_item_id' => $data['inventory_item_id'],
                ],
                ['quantity' => 0]
            );

            $destinationStock->increment('quantity', $data['quantity']);

            // Log the transfer
            $transfer = StockTransfer::create($data);

            DB::commit();

            // Remove cache to keep inventory up to date after transfer
            Cache::forget("warehouse_inventory_{$data['from_warehouse_id']}");
            Cache::forget("warehouse_inventory_{$data['to_warehouse_id']}");

            return response()->json([
                'message' => 'Stock transferred successfully.',
                'transfer' => $transfer,
            ], 201);

        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Transfer failed',
                'details' => $e->getMessage(),
            ], 500);
        }
    }
}
