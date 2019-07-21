<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    protected $table = "phieunhap";

    public function chiTietNhap(){
        return $this->hasMany('app\ChiTietNhap','IDPhieuNhap','IDPhieuNhap');
    }

    public function nhanVien(){
        return $this->belongsTo('app\NhanVien','MaNV','MaNV');
    }

    public function nhaCungCap(){
        return $this->belongsTo('app\NhaCungCap','MaNCC','MaNCC');
    }
}
