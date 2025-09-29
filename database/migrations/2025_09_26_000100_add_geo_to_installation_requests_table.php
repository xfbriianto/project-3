<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('installation_requests', function (Blueprint $table) {
            $table->string('formatted_address', 500)->nullable()->after('address');
            $table->decimal('latitude', 10, 7)->nullable()->after('formatted_address');
            $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
        });
    }

    public function down(): void
    {
        Schema::table('installation_requests', function (Blueprint $table) {
            $table->dropColumn(['formatted_address', 'latitude', 'longitude']);
        });
    }
};


