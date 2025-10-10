# TODO: Ensure Checkout Data Enters Orders Table Immediately

## 1. Modify processCheckout in PaymentController
- [x] Generate unique order_id
- [x] Create Order with status 'pending' and checkout data
- [x] Create OrderItems from cart
- [x] Clear cart after order creation
- [x] Save order_id to session for use in createTransaction

## 2. Modify createTransaction in PaymentController
- [x] Use order_id from session instead of generating new one
- [x] Ensure sales_reports uses the same order_id

## 3. Modify handleCallback in PaymentController
- [x] Update existing order status to 'completed' on successful payment
- [x] Remove order creation logic from callback
- [x] Update sales_reports status

## 4. Test the Flow
- [ ] Submit checkout form and verify order is created with 'pending' status
- [ ] Complete payment and verify order status updates to 'completed'
- [ ] Check that order_items are created correctly
