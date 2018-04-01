<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh_nhatro extends Model
{
    public    $timestamps   = false;

    protected $table        = 'hinhanh_nhatro';
    protected $fillable     = ['nt_ma', 'ha_ten'];
    public    $incrementing = false;
}
