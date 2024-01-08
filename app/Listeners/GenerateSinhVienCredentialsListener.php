<?php

namespace App\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\GenerateSinhVienCredentials;
use Illuminate\Support\Facades\Hash;

class GenerateSinhVienCredentialsListener
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
    public function handle(GenerateSinhVienCredentials $event)
    {
        $sinhvien = $event->sinhvien;


        $sinhvien->NguoiDung()->create([
            'TenDangNhap' => $sinhvien->MSSV,
            'MatKhau' => Hash::make($sinhvien->MSSV),
            'VaiTro' => 'sinh_vien',
        ]);
    }
}
