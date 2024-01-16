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
        Schema::create('giang_viens', function (Blueprint $table) {
            $table->string('MaGV', 10) -> primary();
            $table->string('HoGV', 20);
            $table->string('TenGV', 20);
            $table->string('GioiTinh', 5);
            $table->string('DiaChi', 50);
            $table->string('DienThoai', 10);
            $table->string('Email', 30);
            $table->string('SoQuyetDinhCV', 10) -> nullable();
            $table->timestamps();

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giang_viens');
    }
};
