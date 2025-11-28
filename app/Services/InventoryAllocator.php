<?php

namespace App\Services;

use App\Models\Batch;
use App\Models\InventoryTransaction;
use Illuminate\Support\Collection;

class InventoryAllocator
{
    /**
     * Suggest batches for picking based on FEFO (First Expired, First Out).
     *
     * @param int $productId
     * @param int $quantity
     * @return Collection
     */
    public function suggestBatches(int $productId, int $quantity): Collection
    {
        // Get batches for the product with positive stock, ordered by expiry date (nulls last or first depending on policy, usually last)
        // For simplicity, we assume we calculate current stock per batch on the fly or have it cached.
        // Since we don't have a 'quantity' column on batches table representing current stock, 
        // we need to aggregate transactions for each batch.

        // However, for performance in a real system, Batch should have a current_stock. 
        // Let's assume for this MVP we aggregate or use a simplified approach if Batch doesn't have stock.
        // Wait, the user didn't ask to add stock to Batch, but it's implied for FEFO.
        // Let's check the Batch model again. It has 'product_id', 'batch_code', 'expiry_date'.
        // We need to calculate stock per batch.

        $batches = Batch::where('product_id', $productId)
            ->whereNotNull('expiry_date')
            ->orderBy('expiry_date', 'asc')
            ->get();

        $suggestions = collect();
        $remainingQty = $quantity;

        foreach ($batches as $batch) {
            if ($remainingQty <= 0) {
                break;
            }

            // Calculate current stock for this batch
            $in = InventoryTransaction::where('batch_id', $batch->id)->where('type', 'in')->sum('quantity');
            $out = InventoryTransaction::where('batch_id', $batch->id)->where('type', 'out')->sum('quantity');
            $currentStock = $in - $out;

            if ($currentStock > 0) {
                $take = min($remainingQty, $currentStock);
                $suggestions->push([
                    'batch_id' => $batch->id,
                    'batch_code' => $batch->batch_code,
                    'expiry_date' => $batch->expiry_date,
                    'quantity' => $take,
                ]);
                $remainingQty -= $take;
            }
        }

        // If we still need more and have batches without expiry date (optional)
        if ($remainingQty > 0) {
            $noExpiryBatches = Batch::where('product_id', $productId)
                ->whereNull('expiry_date')
                ->get();

            foreach ($noExpiryBatches as $batch) {
                if ($remainingQty <= 0) break;
                $in = InventoryTransaction::where('batch_id', $batch->id)->where('type', 'in')->sum('quantity');
                $out = InventoryTransaction::where('batch_id', $batch->id)->where('type', 'out')->sum('quantity');
                $currentStock = $in - $out;

                if ($currentStock > 0) {
                    $take = min($remainingQty, $currentStock);
                    $suggestions->push([
                        'batch_id' => $batch->id,
                        'batch_code' => $batch->batch_code,
                        'expiry_date' => null,
                        'quantity' => $take,
                    ]);
                    $remainingQty -= $take;
                }
            }
        }

        return $suggestions;
    }
}
