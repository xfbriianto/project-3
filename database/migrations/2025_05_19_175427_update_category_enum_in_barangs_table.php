<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateCategoryEnumInBarangsTable extends Migration
{
    public function up()
    {
        // Ubah kolom enum menjadi enum baru
        DB::statement("ALTER TABLE barangs MODIFY category ENUM(
            'Elektronik',
            'Perkakas',
            'Material',
            'Aksesoris',
            'CCTV Indoor',
            'CCTV Outdoor',
            'IP Camera',
            'DVR/NVR'
        )");
    }

    public function down()
    {
        // Rollback ke enum sebelumnya
        DB::statement("ALTER TABLE barangs MODIFY category ENUM(
            'Elektronik',
            'Perkakas',
            'Material'
        )");
    }
}

