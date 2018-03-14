<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baidang extends Model
{
    public    $timestamps   = false;

    protected $table        = 'baidang';
    protected $fillable     = ['nt_ma', 'lbd_ma', 'bd_tieude', 'bd_noidung', 'bd_taomoi', 'bd_capnhat', 'bd_trangthai'];
    protected $guarded      = ['bd_ma'];

    protected $primaryKey   = 'bd_ma';

    protected $dates        = ['bd_taomoi', 'bd_capnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
