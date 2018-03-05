<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhgia extends Model
{
    public    $timestamps   = false;

    protected $table        = 'danhgia';
    protected $fillable     = ['dg_noidung', 'dg_taomoi'];
    protected $guarded      = ['nt_ma', 'id', 'dg_stt'];

    protected $primaryKey   = ['nt_ma', 'id', 'dg_stt'];
    public    $incrementing = false;


    protected $dates        = ['dg_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
