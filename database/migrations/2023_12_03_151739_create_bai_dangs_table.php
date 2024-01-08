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
        Schema::create('bai_dangs', function (Blueprint $table) {
            $table->id();
            $table->string('TieuDeBD', 40);
            $table->text('NoiDungBD');
            $table->string('HinhAnh', 100) -> nullable();
            $table->date('NgayDang');
            $table->string('TrangThai')->default('Chờ duyệt');
            $table->timestamps();
            
            $table->string('TenDangNhap', 10);
            $table->string('MaChuDe', 10);
        });

        Schema::table('bai_dangs', function (Blueprint $table) {
            $table->foreign('TenDangNhap')->references('TenDangNhap')->on('nguoi_dungs');
            $table->foreign('MaChuDe')->references('MaChuDe')->on('chu_des');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bai_dangs');
    }
};
