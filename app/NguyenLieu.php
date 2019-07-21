<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguyenLieu extends Model
{
    protected $table = "nguyenlieu";

    public function chiTietNhap(){
        return $this->hasMany('app\ChiTietNhap','MaNL','MaNL');
    }

    public function chiTietXuat(){
        return $this->hasMany('app\ChiTietXuat','MaNL','MaNL');
    }
}
