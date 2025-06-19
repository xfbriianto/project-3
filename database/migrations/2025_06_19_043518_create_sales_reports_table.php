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
        $table->unsignedBigInteger('user_id')->nullable();
        $table->decimal('total', 16, 2);
        $table->string('status');
        $table->timestamp('transaction_date')->nullable();
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
