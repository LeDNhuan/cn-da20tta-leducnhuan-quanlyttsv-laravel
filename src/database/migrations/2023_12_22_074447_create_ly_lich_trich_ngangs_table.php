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
        Schema::create('ly_lich_trich_ngangs', function (Blueprint $table) {
            $table->string('MaLyLich', 10) -> primary();
            $table->string('HoTenCha', 30);
            $table->date('NamSinhCha');
            $table->string('DienThoaiCha', 10);
            $table->string('DanTocCha', 10);
            $table->string('TonGiaoCha', 10);
            $table->string('NgheNghiepCha', 30);
            $table->string('HoTenMe', 30);
            $table->date('NamSinhMe');
            $table->string('DienThoaiMe', 10);
            $table->string('DanTocMe', 10);
            $table->string('TonGiaoMe', 10);
            $table->string('NgheNghiepMe', 30);
            $table->timestamps();

            $table->string('MSSV', 10);
        });

        Schema::table('ly_lich_trich_ngangs', function (Blueprint $table) {
            $table->foreign('MSSV')->references('MSSV')->on('sinh_viens');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ly_lich_trich_ngangs');
    }
};
