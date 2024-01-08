<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaoTao extends Model
{
    use HasFactory;
    protected $primaryKey = 'MaDaoTao';
    public $incrementing = false;
    protected $fillable = [
        'MaDaoTao', 
        'SoQuyetDinh',
        'TinChi',
        'TCLyThuyet',
        'TCThucHanh'
    ];
}
