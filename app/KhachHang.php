<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "khachhang";

    public function donDatHang(){
        return $this->hasMany('app\DonDatHang','MaKH','MaKH');
    }

    public function hoaDon(){
        return $this->hasMany('app\HoaDon','MaKH','MaKH');
    }
}
