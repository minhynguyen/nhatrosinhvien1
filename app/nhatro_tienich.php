<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhatro_tienich extends Model
{
    public    $timestamps   = false;

    protected $table        = 'nhatrotienich';
    protected $fillable     = [];
    protected $guarded      = ['nt_ma', 'ti_ma'];

    protected $primaryKey   = ['nt_ma', 'ti_ma'];
    public    $incrementing = false;
}
