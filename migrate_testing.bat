@echo off
echo Running migrations for testing environment...

php artisan migrate --path=database/migrations/0001_01_01_000000_create_users_table.php --env=testing
php artisan migrate --path=database/migrations/0001_01_01_000001_create_cache_table.php --env=testing
php artisan migrate --path=database/migrations/0001_01_01_000002_create_jobs_table.php --env=testing
php artisan migrate --path=database/migrations/2025_03_22_073958_add_role_to_users_table.php --env=testing
php artisan migrate --path=database/migrations/2025_03_24_052637_create_password_resets_table.php --env=testing
php artisan migrate --path=database/migrations/2025_04_30_121902_create_barangs_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_01_114001_create_orders_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_01_114018_create_order_items_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_01_114429_create_products_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_01_115453_add_total_to_orders_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_05_085118_add_image_to_barangs_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_06_162000_create_personal_access_tokens_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_14_020454_add_image_to_barangs_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_16_132828_create_pakets_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_16_132829_create_barang_paket_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_16_133633_create_pakets_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_19_175427_update_category_enum_in_barangs_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_20_141106_create_cart_items_table.php --env=testing
php artisan migrate --path=database/migrations/2025_05_20_152257_create_carts_table.php --env=testing
php artisan migrate --path=database/migrations/2025_06_19_043518_create_sales_reports_table.php --env=testing
php artisan migrate --path=database/migrations/2025_06_19_182512_add_barang_to_sales_reports_table.php --env=testing
php artisan migrate --path=database/migrations/2025_07_26_163459_add_paket_id_to_cart_items_table.php --env=testing
php artisan migrate --path=database/migrations/2025_07_26_163842_make_barang_id_nullable_in_cart_items_table.php --env=testing
php artisan migrate --path=database/migrations/2025_07_26_164746_create_komponens_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_19_010546_create_ratings_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_26_000000_create_installation_requests_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_26_000100_add_geo_to_installation_requests_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_26_000200_add_note_to_installation_requests_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_26_000300_add_komponen_id_to_cart_items_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_28_023024_add_google_id_to_users_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_29_171854_add_buyer_shipping_fields_to_orders_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_29_175437_add_order_id_to_orders_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_29_180107_add_checkout_data_to_sales_reports_table.php --env=testing
php artisan migrate --path=database/migrations/2025_09_29_180612_add_paket_and_komponen_to_order_items_table.php --env=testing

echo All migrations completed.
