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
    Schema::create('sales_reports', function (Blueprint $table) {
        $table->id();
        $table->string('order_id')->unique();
        $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
        $table->decimal('total', 16, 2)->default(0);
        $table->string('status')->default('pending');
        $table->timestamp('transaction_date')->nullable();
        $table->text('barang')->nullable(); // jika ingin simpan daftar barang
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_reports');
    }

    
};
