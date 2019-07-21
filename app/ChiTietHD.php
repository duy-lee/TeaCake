<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHD extends Model
{
    protected $table = "chitiethd";
    protected $primaryKey = ['MaHD', 'MaSP'];

    public function hoaDon(){
        return $this->belongsTo()('app\HoaDon','MaHD',$primaryKey);
    }

    public function sanPham(){
        return $this->belongsTo()('app\SanPham','MaSP',$primaryKey);
    }
}
