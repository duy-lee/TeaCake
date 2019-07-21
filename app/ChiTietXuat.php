<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietXuat extends Model
{
    protected $table = "chitietxuat";
    protected $primaryKey = ['IDPhieuXuat', 'MaNL'];

    public function nguyenLieu(){
        return $this->belongsTo()('app\NguyenLieu','MaNL',$primaryKey);
    }

    public function phieuXuat(){
        return $this->belongsTo()('app\PhieuXuat','IDPhieuXuat',$primaryKey);
    }
}
