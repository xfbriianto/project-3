<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Simulate Midtrans callback by directly calling the logic
$orderId = 'ORD175920714837';
$transactionStatus = 'capture';

// Simulate the callback logic
$salesReport = \App\Models\SalesReport::where('order_id', $orderId)->first();

if ($salesReport) {
    $userId = $salesReport->user_id;

    $order = \App\Models\Order::with('items.barang')->where('order_id', $orderId)->first();

    if (in_array($transactionStatus, ['settlement', 'capture'])) {
        $salesReport->update([
            'status' => 'completed',
            'transaction_date' => now(),
        ]);

        if ($order) {
            $order->update(['status' => 'completed']);

            // Kurangi stok barang setelah pembayaran berhasil
            foreach ($order->items as $item) {
                if ($item->barang) {
                    $barang = $item->barang;
                    $barang->stock = max(0, $barang->stock - $item->quantity);
                    $barang->save();
                }
            }
        }

        echo "Callback processed successfully\n";
    } else {
        echo "Transaction status not completed\n";
    }
} else {
    echo "Sales report not found\n";
}

// Check if order exists
$order = \App\Models\Order::where('order_id', 'ORD175920714837')->first();
if ($order) {
    echo "Order found with ID: " . $order->id . "\n";
    echo "Order status: " . $order->status . "\n";
    echo "Order items: " . $order->items->count() . "\n";
    foreach ($order->items as $item) {
        if ($item->barang) {
            echo "Item: " . $item->barang->name . " qty: " . $item->quantity . " stock before: " . $item->barang->stock . "\n";
        }
    }
} else {
    echo "Order was not found\n";
}

// Check sales report
$salesReport = \App\Models\SalesReport::where('order_id', 'ORD175920714837')->first();
if ($salesReport) {
    echo "Sales report found with status: " . $salesReport->status . "\n";
} else {
    echo "Sales report not found\n";
}
