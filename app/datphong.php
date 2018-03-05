<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datphong extends Model
{
    public    $timestamps   = false;

    protected $table        = 'datphong';
    protected $fillable     = ['dp_ghichu', 'dp_thoigiandat', 'dp_thoigianketthuc', 'dp_trangthai'];
    protected $guarded      = ['pt_ma', 'id', 'dp_ma'];

    protected $primaryKey   = ['pt_ma', 'id', 'dp_ma'];
    public    $incrementing = false;


    protected $dates        = ['dp_thoigiandat', 'dp_thoigianketthuc'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
