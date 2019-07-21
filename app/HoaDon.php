<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = "hoadon";

    public function donDatHang(){
        return $this->belongsTo('app\DonDatHang','MaDDH','MaHD');
    }

    public function khachHang(){
        return $this->belongsTo('app\KhachHang','MaKH','MaHD');
    }

    public function nhanVien(){
        return $this->belongsTo('app\NhanVien','MaNV','MaHD');
    }

    public function chiTietHD(){
        return $this->hasMany('app\ChiTietHD','MaHD','MaHD');
    }
}
