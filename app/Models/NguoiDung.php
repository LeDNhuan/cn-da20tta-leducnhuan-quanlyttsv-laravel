<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class NguoiDung extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    use Authenticatable;
    protected $primaryKey = 'TenDangNhap';
    public $incrementing = false;
    protected $fillable = [
        'TenDangNhap', 
        'MatKhau', 
        'VaiTro', 
        'AnhDaiDien'
    ];
    public function binhluans()
    {
        return $this->hasMany(BinhLuan::class, 'TenDangNhap', 'TenDangNhap');
    }
}
