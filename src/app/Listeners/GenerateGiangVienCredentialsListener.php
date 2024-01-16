<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\GenerateGiangVienCredentials;
use Illuminate\Support\Facades\Hash;


class GenerateGiangVienCredentialsListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(GenerateGiangVienCredentials $event)
    {
        $giangvien = $event->giangvien;


        $giangvien->NguoiDung()->create([
            'TenDangNhap' => $giangvien->MaGV,
            'MatKhau' => Hash::make($giangvien->MaGV),
            'VaiTro' => 'giang_vien',
        ]);
    }
}
