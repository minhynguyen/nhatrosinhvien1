<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baidangtaikhoan extends Model
{
    public    $timestamps   = false;

    protected $table        = 'baidangtaikhoan';
    protected $fillable     = ['id', 'bd_ma'];
    

    public    $incrementing = false;

}
