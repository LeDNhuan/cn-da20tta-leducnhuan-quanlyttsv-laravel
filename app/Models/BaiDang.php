<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    use HasFactory;
    protected $primaryKey = 'TieuDeBD';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'TieuDeBD', 
        'NoiDungBD', 
        'HinhAnh', 
        'NgayDang', 
        'TrangThai', 
        'MaChuDe', 
        'TenDangNhap'
    ];
}
