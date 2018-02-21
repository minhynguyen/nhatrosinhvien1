<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaibaidang extends Model
{
    const CREATED_AT ='lbd_taomoi';
    const UPDATED_AT ='lbd_capnhat';
    
    protected $table = 'loaibaidang';
    protected $fillable = ['lbd_ten', 'lbd_taomoi', 'lbd_capnhat', 'lbd_trangthai'];
    protected $guarded = ['lbd_ma'];
    protected $primaryKey = 'lbd_ma';
    protected $dates =['lbd_taomoi', 'lbd_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
