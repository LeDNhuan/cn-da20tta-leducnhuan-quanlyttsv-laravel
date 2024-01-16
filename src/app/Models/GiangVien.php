<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NguoiDung;

class GiangVien extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaGV';
    public $incrementing = false;
    protected $fillable = [
        'MaGV', 
        'HoGV', 
        'TenGV', 
        'GioiTinh', 
        'DiaChi', 
        'DienThoai', 
        'Email'
    ];

    
    public function NguoiDung()
    {
        return $this->hasOne(NguoiDung::class, 'MaGV', 'MaGV');
    }
    public function binhluans()
    {
        return $this->hasMany(BinhLuan::class, 'MaGV', 'TenDangNhap');
    }
}
