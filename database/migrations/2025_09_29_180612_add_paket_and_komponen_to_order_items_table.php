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
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreignId('paket_id')->nullable()->after('barang_id')->constrained('pakets')->nullOnDelete();
            $table->foreignId('komponen_id')->nullable()->after('paket_id')->constrained('komponens')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['paket_id']);
            $table->dropForeign(['komponen_id']);
            $table->dropColumn(['paket_id', 'komponen_id']);
        });
    }
};
