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
        Schema::create('nguoi_dungs', function (Blueprint $table) {
            $table->string('TenDangNhap', 10) -> primary();
            $table->string('MatKhau');
            $table->string('VaiTro', 20);
            $table->string('AnhDaiDien', 100) -> nullable();
            $table->timestamps();

            $table->string('MaGV', 10)-> nullable();
            $table->string('MSSV', 10)-> nullable();
        });

        Schema::table('nguoi_dungs', function (Blueprint $table) {
            $table->foreign('MaGV')->references('MaGV')->on('giang_viens');
            $table->foreign('MSSV')->references('MSSV')->on('sinh_viens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoi_dungs');
    }
};
