<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhatro_tienich extends Model
{
    public    $timestamps   = false;

    protected $table        = 'nhatro_tienich';
    protected $fillable     = [];
    protected $guarded      = ['nt_ma', 'ti_ma'];

    protected $primaryKey   = ['nt_ma', 'ti_ma'];
    public    $incrementing = false;
}
