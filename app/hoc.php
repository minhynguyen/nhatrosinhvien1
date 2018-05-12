<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoc extends Model
{
    public    $timestamps   = false;

    protected $table        = 'hoc';
    protected $guarded      = ['id', 't_ma'];

    protected $primaryKey   = ['id', 't_ma'];
    public    $incrementing = false;
}
