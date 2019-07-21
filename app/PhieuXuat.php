<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuXuat extends Model
{
    protected $table = "phieuxuat";

    public function chiTietXuat(){
        return $this->hasMany('app\ChiTietXuat','IDPhieuXuat','IDPhieuXuat');
    }

    public function nhanVien(){
        return $this->belongsTo()('app\NhanVien','MaNV','IDPhieuXuat');
    }

    public function nhaCungCap(){
        return $this->belongsTo()('app\NhaCungCap','MaNCC','IDPhieuXuat');
    }
}
