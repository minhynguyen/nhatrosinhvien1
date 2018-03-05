<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khoangcach extends Model
{
    public    $timestamps   = false;

    protected $table        = 'khoangcach';
    protected $fillable     = ['kc_giatri'];
    protected $guarded      = ['nt_ma', 't_ma'];

    protected $primaryKey   = ['nt_ma', 't_ma'];
    public    $incrementing = false;
}
