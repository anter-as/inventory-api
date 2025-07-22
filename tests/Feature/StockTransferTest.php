<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Warehouse;
use App\Models\InventoryItem;
use App\Models\Stock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StockTransferTest extends TestCase
{
    use RefreshDatabase;

    /** Successful Transfer */
    public function test_successful_stock_transfer()
    {
        $user = User::factory()->create();
        $item = InventoryItem::factory()->create();
        $from = Warehouse::factory()->create();
        $to = Warehouse::factory()->create();

        Stock::create([
            'warehouse_id' => $from->id,
            'inventory_item_id' => $item->id,
            'quantity' => 20,
        ]);

        $response = $this->actingAs($user)->postJson('/api/stock-transfers', [
            'inventory_item_id' => $item->id,
            'from_warehouse_id' => $from->id,
            'to_warehouse_id' => $to->id,
            'quantity' => 10,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('stocks', [
            'warehouse_id' => $from->id,
            'inventory_item_id' => $item->id,
            'quantity' => 10,
        ]);
        $this->assertDatabaseHas('stocks', [
            'warehouse_id' => $to->id,
            'inventory_item_id' => $item->id,
            'quantity' => 10,
        ]);
    }

    /** Rejected Transfer */
    public function test_transfer_fails_when_quantity_exceeds_stock()
    {
        $user = User::factory()->create();
        $item = InventoryItem::factory()->create();
        $from = Warehouse::factory()->create();
        $to = Warehouse::factory()->create();

        Stock::create([
            'warehouse_id' => $from->id,
            'inventory_item_id' => $item->id,
            'quantity' => 5,
        ]);

        $response = $this->actingAs($user)
            ->withHeaders(['Accept' => 'application/json'])
            ->postJson('/api/stock-transfers', [
                'inventory_item_id' => $item->id,
                'from_warehouse_id' => $from->id,
                'to_warehouse_id' => $to->id,
                'quantity' => 10,
            ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('quantity');
    }
}
