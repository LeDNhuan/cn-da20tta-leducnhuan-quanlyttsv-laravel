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
        Schema::create('lops', function (Blueprint $table) {
            $table->string('MaLop', 10) -> primary();
            $table->string('TenLop', 30);
            $table->timestamps();

            $table->string('MaDaoTao', 20);
        });

        Schema::table('lops', function (Blueprint $table) {
            $table->foreign('MaDaoTao')->references('MaDaoTao')->on('dao_taos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lops');
    }
};
