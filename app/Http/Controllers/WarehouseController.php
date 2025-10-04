<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WarehouseController extends Controller
{
    public function inventory(int $id): JsonResponse
    {
        $cacheKey = "warehouse_inventory_{$id}";

        $data = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($id) {
            $warehouse = Warehouse::with(['stocks.inventoryItem'])->findOrFail($id);

            $inventory = $warehouse->stocks->map(function ($stock) {
                return [
                    'item_id'   => $stock->inventoryItem->id,
                    'name'      => $stock->inventoryItem->name,
                    'sku'       => $stock->inventoryItem->sku,
                    'price'     => $stock->inventoryItem->price,
                    'quantity'  => $stock->quantity,
                ];
            });

            return [
                'warehouse' => [
                    'id'       => $warehouse->id, 	/** @phpstan-ignore variable.undefined */
                    'name'     => $warehouse->name,
                    'location' => $warehouse->location,
                ],
                'inventory' => $inventory,
            ];
        });

        return response()->json($data);
    }
}
