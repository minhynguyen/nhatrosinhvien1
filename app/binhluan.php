<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    public    $timestamps   = false;

    protected $table        = 'binhluan';
    protected $fillable     = ['id', 'bd_ma', 'bl_noidung', 'bl_taomoi'];
    

    public    $incrementing = false;


    protected $dates        = ['bl_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
