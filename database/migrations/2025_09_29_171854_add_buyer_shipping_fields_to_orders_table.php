<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address_street');
            $table->string('address_city');
            $table->string('address_province');
            $table->string('address_postal_code');
            $table->enum('shipping_method', ['JNE', 'J&T', 'Grab', 'Gojek', 'ambil di toko']);
            $table->text('address_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'full_name',
                'email',
                'phone',
                'address_street',
                'address_city',
                'address_province',
                'address_postal_code',
                'shipping_method',
                'address_notes'
            ]);
        });
    }
};
