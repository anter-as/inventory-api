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

            /** @var \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stock> $stocks */
            $stocks = $warehouse->stocks;
            $inventory = $stocks->map(function ($stock) {
                /** @var \App\Models\InventoryItem $item */
                $item = $stock->inventoryItem;
                return [
                    'item_id'   => $item->id,
                    'name'      => $item->name,
                    'sku'       => $item->sku,
                    'price'     => $item->price,
                    'quantity'  => $stock->quantity,
                ];
            });

            return [
                'warehouse' => [
                    'id'       => $warehouse->id,
                    'name'     => $warehouse->name,
                    'location' => $warehouse->location,
                ],
                'inventory' => $inventory->toArray(),
            ];
        });

        return response()->json($data);
    }
}
