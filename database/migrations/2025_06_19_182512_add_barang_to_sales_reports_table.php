<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('sales_reports', function (Blueprint $table) {
        $table->text('barang')->nullable()->after('status');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales_reports', function (Blueprint $table) {
            //
        });
    }
};
