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
        Schema::create('co_vans', function (Blueprint $table) {
            $table->string('MaGV', 10);
            $table->string('MaLop', 10);
            $table->date('ThoiGianBDCV');
            $table->date('ThoiGianKTCV');
            $table->timestamps();
            $table->string('TrangThai', 20);

            $table -> primary(['MaGV', 'MaLop']);
        });

        Schema::table('co_vans', function (Blueprint $table) {
            $table->foreign('MaGV')->references('MaGV')->on('giang_viens');
            $table->foreign('MaLop')->references('MaLop')->on('lops');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('co_vans');
    }
};
