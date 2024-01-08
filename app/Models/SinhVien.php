<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NguoiDung;

class SinhVien extends Model
{
    use HasFactory;
    protected $primaryKey = 'MSSV';
    public $incrementing = false;
    protected $fillable = [
        'MSSV', 
        'HoSV', 
        'TenSV', 
        'GioiTinh',
        'NgaySinh',
        'MaLop', 
        'DiaChi', 
        'DienThoai', 
        'Email',
        'TinhTrang'
    ];

    public function NguoiDung()
    {
        return $this->hasOne(NguoiDung::class, 'MSSV', 'MSSV');
    }
    public function binhluans()
    {
        return $this->hasMany(BinhLuan::class, 'MSSV', 'TenDangNhap');
    }
}
