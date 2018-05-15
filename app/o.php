<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class o extends Model
{
    public    $timestamps   = false;

    protected $table        = 'o';
    protected $fillable     = ['id', 'nt_ma'];
    protected $guarded      = [];

    public    $incrementing = false;
}
