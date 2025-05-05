<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['Elektronik','Perkakas','Material']);
            $table->integer('stock')->unsigned();
            $table->decimal('price', 15, 2)->unsigned();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};