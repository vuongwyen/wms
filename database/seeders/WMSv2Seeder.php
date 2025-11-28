<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\InventoryTransaction;
use Illuminate\Database\Seeder;

class WMSv2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Locations for existing Warehouses
        $warehouses = Warehouse::all();

        foreach ($warehouses as $warehouse) {
            // Create Zones
            $zoneA = Location::create([
                'warehouse_id' => $warehouse->id,
                'code' => 'Z-A-' . $warehouse->id,
                'description' => 'Zone A - High Velocity',
                'type' => 'Zone',
            ]);

            // Create Racks in Zone A
            for ($i = 1; $i <= 3; $i++) {
                $rack = Location::create([
                    'warehouse_id' => $warehouse->id,
                    'code' => "R-A{$i}-" . $warehouse->id,
                    'description' => "Rack A{$i}",
                    'type' => 'Rack',
                ]);

                // Create Bins in Rack
                for ($j = 1; $j <= 5; $j++) {
                    Location::create([
                        'warehouse_id' => $warehouse->id,
                        'code' => "B-A{$i}-{$j}-" . $warehouse->id,
                        'description' => "Bin A{$i}-{$j}",
                        'type' => 'Bin',
                    ]);
                }
            }
        }

        // 2. Update Products with Barcodes
        $products = Product::all();
        foreach ($products as $product) {
            if (!$product->barcode) {
                $product->update(['barcode' => $product->sku]); // Use SKU as barcode for simplicity
            }
        }

        // 3. Assign random locations to existing Inventory Transactions (optional, but good for testing)
        // This is tricky because transactions are immutable history. 
        // But for "current stock" logic which might rely on latest transaction location, we might want to add new "move" transactions.
        // For now, let's just ensure new transactions use locations.

        // Let's create some dummy "Move" transactions to put stock into locations
        // Or just update null location_ids for testing purposes (not recommended for prod but ok for dev upgrade)

        $transactions = InventoryTransaction::whereNull('location_id')->get();
        foreach ($transactions as $transaction) {
            // Find a random bin in the same warehouse
            $location = Location::where('warehouse_id', $transaction->warehouse_id)
                ->where('type', 'Bin')
                ->inRandomOrder()
                ->first();

            if ($location) {
                $transaction->update(['location_id' => $location->id]);
            }
        }
    }
}
