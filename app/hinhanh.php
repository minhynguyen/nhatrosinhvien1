<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'hinhanh';
    protected $fillable     = ['ha_ten'];
    protected $guarded      = ['nt_ma', 'ha_stt'];

    protected $primaryKey   = ['nt_ma', 'ha_stt'];
    public    $incrementing = false;
}
