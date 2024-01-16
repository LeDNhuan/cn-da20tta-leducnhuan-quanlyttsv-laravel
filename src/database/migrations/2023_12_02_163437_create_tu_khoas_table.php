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
        Schema::create('tu_khoas', function (Blueprint $table) {
            $table->string('MaTuKhoa', 10) -> primary();
            $table->string('TuKhoa', 20);
            $table->timestamps();

            $table->string('MaChuDe', 10);
        });

        Schema::table('tu_khoas', function (Blueprint $table) {
            $table->foreign('MaChuDe')->references('MaChuDe')->on('chu_des');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tu_khoas');
    }
};
