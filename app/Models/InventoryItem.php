<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'sku', 'price', 'description'];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class, 'stocks')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    // 🔍 For search (name/price range), we’ll add a scope later.
}
