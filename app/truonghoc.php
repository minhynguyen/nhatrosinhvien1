<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class truonghoc extends Model
{
    const CREATED_AT ='t_taomoi';
    const UPDATED_AT ='t_capnhat';
    
    protected $table = 'truong';
    protected $fillable = ['t_ten', 't_vido', 't_kinhdo' ,'t_taomoi', 't_capnhat', 't_trangthai'];
    protected $guarded = ['t_ma'];
    protected $primaryKey = 't_ma';
    protected $dates =['t_taomoi', 't_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
