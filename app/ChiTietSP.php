<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietSP extends Model
{
    protected $table = "chitietsanpham";

    public function sanPham(){
        return $this->belongsTo()('app\SanPham','MaSP','IdSP');
    }
}
