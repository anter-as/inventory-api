<?php

namespace Database\Seeders;

use App\Models\InventoryItem;
use App\Models\Stock;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouses = Warehouse::all();
        $items = InventoryItem::all();

        foreach ($warehouses as $warehouse) {
            foreach ($items->random(5) as $item) {
                Stock::create([
                    'warehouse_id' => $warehouse->id,
                    'inventory_item_id' => $item->id,
                    'quantity' => rand(1, 100),
                ]);
            }
        }
    }
}
