<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tienich extends Model
{
    const CREATED_AT ='ti_taomoi';
    const UPDATED_AT ='ti_capnhat';
    
    protected $table = 'tienich';
    protected $fillable = ['ti_ten', 'ti_taomoi', 'ti_capnhat', 'ti_trangthai'];
    protected $guarded = ['ti_ma'];
    protected $primaryKey = 'ti_ma';
    protected $dates =['ti_taomoi', 'ti_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
