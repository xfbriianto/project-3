<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class MigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that all migrations have been run successfully in the testing environment.
     */
    public function testMigrationsHaveRun()
    {
        // List of tables that should exist after migrations
        $expectedTables = [
            'users',
            'cache',
            'jobs',
            'password_resets',
            'barangs',
            'orders',
            'order_items',
            'products',
            'pakets',
            'barang_paket',
            'cart_items',
            'carts',
            'sales_reports',
            'komponens',
            'ratings',
            'installation_requests',
        ];

        foreach ($expectedTables as $table) {
            $this->assertTrue(Schema::hasTable($table), "Table '{$table}' does not exist.");
        }
    }

    /**
     * Test specific columns in key tables.
     */
    public function testKeyTableColumns()
    {
        // Test users table columns
        $this->assertTrue(Schema::hasColumn('users', 'role'), 'Column role does not exist in users table.');
        $this->assertTrue(Schema::hasColumn('users', 'google_id'), 'Column google_id does not exist in users table.');

        // Test barangs table columns
        $this->assertTrue(Schema::hasColumn('barangs', 'image'), 'Column image does not exist in barangs table.');
        $this->assertTrue(Schema::hasColumn('barangs', 'category'), 'Column category does not exist in barangs table.');

        // Test orders table columns
        $this->assertTrue(Schema::hasColumn('orders', 'total'), 'Column total does not exist in orders table.');
        $this->assertTrue(Schema::hasColumn('orders', 'buyer_name'), 'Column buyer_name does not exist in orders table.');
        $this->assertTrue(Schema::hasColumn('orders', 'order_id'), 'Column order_id does not exist in orders table.');

        // Test cart_items table columns
        $this->assertTrue(Schema::hasColumn('cart_items', 'paket_id'), 'Column paket_id does not exist in cart_items table.');
        $this->assertTrue(Schema::hasColumn('cart_items', 'komponen_id'), 'Column komponen_id does not exist in cart_items table.');

        // Test sales_reports table columns
        $this->assertTrue(Schema::hasColumn('sales_reports', 'barang'), 'Column barang does not exist in sales_reports table.');
        $this->assertTrue(Schema::hasColumn('sales_reports', 'checkout_data'), 'Column checkout_data does not exist in sales_reports table.');

        // Test order_items table columns
        $this->assertTrue(Schema::hasColumn('order_items', 'paket_id'), 'Column paket_id does not exist in order_items table.');
        $this->assertTrue(Schema::hasColumn('order_items', 'komponen_id'), 'Column komponen_id does not exist in order_items table.');

        // Test installation_requests table columns
        $this->assertTrue(Schema::hasColumn('installation_requests', 'geo'), 'Column geo does not exist in installation_requests table.');
        $this->assertTrue(Schema::hasColumn('installation_requests', 'note'), 'Column note does not exist in installation_requests table.');
    }
}
