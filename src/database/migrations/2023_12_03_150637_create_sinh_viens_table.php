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
        Schema::create('sinh_viens', function (Blueprint $table) {
            $table->string('MSSV', 10) -> primary();
            $table->string('TenSV', 20);
            $table->string('HoSV', 20);
            $table->string('GioiTinh', 5);
            $table->date('NgaySinh');
            $table->string('DiaChi', 50);
            $table->string('DienThoai', 10);
            $table->string('Email', 30);
            $table->string('TinhTrang', 10);
            $table->timestamps();
           
            $table->string('MaLop', 10);
        });

        Schema::table('sinh_viens', function (Blueprint $table) {
            $table->foreign('MaLop')->references('MaLop')->on('lops');
            
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinh_viens');
    }
};
