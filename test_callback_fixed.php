<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Simulate Midtrans callback by setting $_POST data
$_POST = [
    'order_id' => 'ORD175917102437',
    'transaction_status' => 'settlement',
    'gross_amount' => '2500000.00',
    'payment_type' => 'bank_transfer',
    'transaction_time' => now()->toISOString(),
    'transaction_id' => 'test-transaction-123',
    'status_code' => '200',
    'signature_key' => 'test-signature',
];

// Create a mock request
$request = new Illuminate\Http\Request();
$request->merge($_POST);

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
