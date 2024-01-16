<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LyLichTrichNgang extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaLyLich';
    public $incrementing = false;
    protected $fillable = [
        'MaLyLich', 
        'MSSV',
        'HoTenCha',
        'NamSinhCha',
        'DienThoaiCha',
        'DanTocCha',
        'TonGiaoCha',
        'NgheNghiepCha',
        'HoTenMe',
        'NamSinhMe',
        'DienThoaiMe',
        'DanTocMe',
        'TonGiaoMe',
        'NgheNghiepMe'
    ];
}
