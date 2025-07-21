<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function inventory($id)
    {
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

        return response()->json([
            'warehouse' => [
                'id'       => $warehouse->id,
                'name'     => $warehouse->name,
                'location' => $warehouse->location,
            ],
            'inventory' => $inventory,
        ]);
    }
}
