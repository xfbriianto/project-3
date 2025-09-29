# TODO: Add Buyer and Shipping Data Feature Before Checkout

## 1. Create Migration for Buyer and Shipping Fields
- [x] Add fields to orders table: full_name, email, phone, address_street, address_city, address_province, address_postal_code, shipping_method, address_notes

## 2. Update Order Model
- [x] Add new fields to fillable array in app/Models/Order.php

## 3. Create Checkout Form View
- [x] Create resources/views/checkout.blade.php with form for buyer and shipping data

## 4. Add Checkout Route and Controller Method
- [x] Add route in routes/web.php for checkout form
- [x] Add method in PaymentController or new CheckoutController to show form

## 5. Update Payment Creation Flow
- [x] Modify PaymentController::createTransaction to accept and save buyer/shipping data
- [x] Update order creation in callback to include these fields

## 6. Update Cart View
- [x] Change "Bayar Sekarang" button to link to checkout form instead of direct payment

## 7. Test the Flow
- [x] Run migration: php artisan migrate
- [x] Test the checkout flow from cart to payment
- [x] Fix routing issue for payment page
- [x] Fix data not saving to orders table (added order_id field)
- [x] Fix session data not available in callback (store checkout_data in sales_reports)
