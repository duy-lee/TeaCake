<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class NhanVien extends Model
{
    protected $table = "nhanvien";

    public function phieuXuat(){
        return $this->hasMany('app\PhieuXuat','MaVN','MaNV');
    }

    public function hoaDon(){
        return $this->hasMany('app\HoaDon','MaVN','MaNV');
    }

    public function phieuNhap(){
        return $this->hasMany('app\PhieuNhap','MaVN','MaNV');
    }
}
