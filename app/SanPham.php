<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = "sanpham";
    public function loaiSP(){
        return $this->belongsTo('app\LoaiSP','MaLoaiSP','MaSP');
    }

    public function chiTietSP(){
        return $this->hasMany('app\ChiTietSP','MaSP','MaSP');
    }

    public function chiTietDDH(){
        return $this->hasMany('app\ChiTietDDH','MaSP','MaSP');
    }

    public function chiTietHD(){
        return $this->hasMany('app\ChiTietHD','MaSP','MaSP');
    }
}
