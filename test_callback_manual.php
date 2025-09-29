<?php

require_once 'vendor/autoload.php';

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Http\Request;
use App\Http\Controllers\PaymentController;

// Create a mock request with callback data
$request = new Request();
$request->merge([
    'transaction_status' => 'settlement',
    'order_id' => 'ORD175917001337', // Use the order_id from your test
    'payment_type' => 'bank_transfer',
    'gross_amount' => '100000',
    'transaction_time' => now()->toISOString(),
    'transaction_id' => 'test-transaction-123',
    'status_code' => '200',
    'signature_key' => 'test-signature'
]);

// Create PaymentController instance
$controller = new PaymentController();

// Call the callback handler
try {
    $response = $controller->handleCallback($request);
    echo "Callback response: " . $response->getContent() . "\n";

    // Check if order was created
    $order = \App\Models\Order::where('order_id', 'ORD175917001337')->first();
    if ($order) {
        echo "Order created successfully with ID: " . $order->id . "\n";
        echo "Order data: " . json_encode($order->toArray(), JSON_PRETTY_PRINT) . "\n";
    } else {
        echo "Order was not created\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Trace: " . $e->getTraceAsString() . "\n";
}
