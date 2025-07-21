<?php

namespace App\Listeners;

use App\Events\LowStockDetected;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class NotifyAdminOfLowStock
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LowStockDetected $event): void
    {
        $stock = $event->stock;

        // Simulated notification (you could email, log, etc.)
        Log::info("🔔 Low stock detected for item '{$stock->inventoryItem->name}' in warehouse '{$stock->warehouse->name}'. Quantity: {$stock->quantity}");
    }
}
