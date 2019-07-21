<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaChiGiaoHang extends Model
{
    protected $table = "diachi_giaohang";

    public function khachHang(){
        return $this->belongsTo('app\KhachHang','MaKH','MaHD');
    }
}
