<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaBL';
    public $incrementing = false;
    protected $fillable = [
        'MaBL', 
        'NoiDungBL', 
        'TenDangNhap', 
        'bai_dangs_id', 
    ];
    public function sinhvien()
    {
        return $this->belongsTo(SinhVien::class, 'TenDangNhap', 'MSSV');
    }
    public function giangvien()
    {
        return $this->belongsTo(GiangVien::class, 'TenDangNhap', 'MaGV');
    }
    public function nguoidung()
    {
        return $this->belongsTo(NguoiDung::class, 'TenDangNhap', 'TenDangNhap');
    }
}
