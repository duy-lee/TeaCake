<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDDH extends Model
{
    protected $table = "chitietddh";
    protected $primaryKey = ['MaDDH', 'MaSP'];

    public function donDatHang(){
        return $this->belongsTo('app\DonDatHang','MaDDH',$primaryKey);
    }

    public function sanPham(){
        return $this->belongsTo('app\SanPham','MaSP',$primaryKey);
    }
}
