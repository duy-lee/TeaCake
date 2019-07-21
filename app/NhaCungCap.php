<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table = "nhacungcap";

    public function phieuXuat(){
        return $this->hasMany('app\PhieuXuat','MaNCC','MaNCC');
    }

    public function phieuNhap(){
        return $this->hasMany('app\PhieuNhap','MaNCC','MaNCC');
    }
}
