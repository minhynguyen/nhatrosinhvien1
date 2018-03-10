<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh_nhatro extends Model
{
    public    $timestamps   = false;

    protected $table        = 'hinhanh_nhatro';
    protected $fillable     = ['ha_ten'];
    protected $guarded      = ['nt_ma'];

    // protected $primaryKey   = 'nt_ma';
    public    $incrementing = false;
}
