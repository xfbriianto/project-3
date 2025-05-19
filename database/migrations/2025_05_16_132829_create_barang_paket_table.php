<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangPaketTable extends Migration
{
    public function up()
    {
        Schema::create('barang_paket', function (Blueprint $table) {
            $table->id();
            // pastikan 'pakets' sudah ada saat migrasi ini dijalankan
            $table->foreignId('paket_id')
                  ->constrained('pakets')   // <— pakai constrained('pakets')
                  ->cascadeOnDelete();
            $table->foreignId('barang_id')
                  ->constrained('barangs')  // <— ganti jika nama tabel barangs
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_paket');
    }
}

