<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    protected $table = "loaisp";
    public function sanPham(){
        return $this->hasMany('app\SanPham','MaLoaiSP','MaLoaiSP');
    }
}
