<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoc extends Model
{
    public    $timestamps   = false;

    protected $table        = 'hoc';
    protected $fillable     = ['id', 't_ma'];
    protected $guarded      = [];


    public    $incrementing = false;
}
