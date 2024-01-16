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
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->int('MaBL', 11);
            $table->text('NoiDungBL');
            $table->timestamps();

            $table->string('TenDangNhap', 10);
            $table->unsignedBigInteger('bai_dangs_id');
        });

        Schema::table('binh_luans', function (Blueprint $table) {
            $table->foreign('TenDangNhap')->references('TenDangNhap')->on('nguoi_dungs');
            $table->foreign('bai_dangs_id')->references('id')->on('bai_dangs');;
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binh_luans');
    }
};
