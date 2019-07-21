<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonDatHang extends Model
{
    protected $table = "dondathang";

    public function chiTietDDH(){
        return $this->hasMany('app\ChiTietDDH','MaDDH','MaDDH');
    }

    public function hoaDon(){
        return $this->hasMany('app\HoaDon','MaDDH','MaDDH');
    }

    public function khachHang(){
        return $this->belongsTo()('app\KhachHang','MaKH','MaDDH');
    }
}   
