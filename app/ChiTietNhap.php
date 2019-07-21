<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietNhap extends Model
{
    protected $table = "chitietnhap";
    protected $primaryKey = ['IDPhieuNhap', 'MaNL'];

    public function phieuNhap(){
        return $this->belongsTo('app\PhieuNhap','IDPhieuNhap',$primaryKey);
    }

    public function nguyenLieu(){
        return $this->belongsTo('app\NguyenLieu','MaNL',$primaryKey);
    }
}
