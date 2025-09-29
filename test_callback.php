<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Simulate Midtrans callback data
$callbackData = [
    'order_id' => 'ORD175917102437',
    'transaction_status' => 'settlement',
    'gross_amount' => '2500000.00',
    'payment_type' => 'bank_transfer',
    'transaction_time' => now()->toISOString(),
];

// Create a mock request
$request = new Illuminate\Http\Request();
$request->merge($callbackData);

// Call the callback handler
$paymentController = new \App\Http\Controllers\PaymentController();
$response = $paymentController->handleCallback($request);

echo "Callback response: " . $response->getContent() . "\n";

// Check if order was created
$order = \App\Models\Order::where('order_id', 'ORD175917102437')->first();
if ($order) {
    echo "Order created successfully with ID: " . $order->id . "\n";
    echo "Order data: " . json_encode($order->toArray()) . "\n";
} else {
    echo "Order was not created\n";
}
