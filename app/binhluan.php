<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    public    $timestamps   = false;

    protected $table        = 'binhluan';
    protected $fillable     = ['bl_noidung', 'bl_taomoi'];
    protected $guarded      = ['bd_ma', 'id', 'bl_stt'];

    protected $primaryKey   = ['bd_ma', 'id', 'bl_stt'];
    public    $incrementing = false;


    protected $dates        = ['bl_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
