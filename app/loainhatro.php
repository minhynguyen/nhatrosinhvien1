<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loainhatro extends Model
{
    const CREATED_AT ='lnt_taomoi';
    const UPDATED_AT ='lnt_capnhat';
    
    protected $table = 'loainhatro';
    protected $fillable = ['lnt_ten', 'lnt_taomoi', 'lnt_capnhat', 'lnt_trangthai'];
    protected $guarded = ['lnt_ma'];
    protected $primaryKey = 'lnt_ma';
    protected $dates =['lnt_taomoi', 'lnt_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
}
