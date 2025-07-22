<?php

namespace Tests\Feature;

use App\Events\LowStockDetected;
use App\Models\User;
use App\Models\Warehouse;
use App\Models\InventoryItem;
use App\Models\Stock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class LowStockDetectedTest extends TestCase
{
    use RefreshDatabase;

    public function test_low_stock_event_is_dispatched()
    {
        Event::fake([LowStockDetected::class]);

        $user = User::factory()->create();
        $item = InventoryItem::factory()->create();
        $from = Warehouse::factory()->create();
        $to = Warehouse::factory()->create();

        Stock::create([
            'warehouse_id' => $from->id,
            'inventory_item_id' => $item->id,
            'quantity' => 11,
        ]);

        $this->actingAs($user)->postJson('/api/stock-transfers', [
            'inventory_item_id' => $item->id,
            'from_warehouse_id' => $from->id,
            'to_warehouse_id' => $to->id,
            'quantity' => 2,
        ]);

        Event::assertDispatched(LowStockDetected::class);
    }
}
