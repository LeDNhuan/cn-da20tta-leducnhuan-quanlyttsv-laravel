<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoVan extends Model
{
    use HasFactory;
    protected $primaryKey = ['MaGV', 'MaLop'];
    public $incrementing = false;
    // protected $keyType = 'string';
    //  public function getKeyName()
    // {
    //     return ['MaGV', 'MaLop'];
    // }
    protected $fillable = [
        'MaGV', 
        'MaLop',
        'ThoiGianBDCV',
        'ThoiGianKTCV',
        'TrangThai'
    ];
}
