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
        Schema::create('dao_taos', function (Blueprint $table) {
            $table->string('MaDaoTao', 20) -> primary();
            $table->string('SoQuyetDinh', 25);
            $table->integer('TinChi');
            $table->integer('TCLyThuyet');
            $table->integer('TCThucHanh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dao_taos');
    }
};
