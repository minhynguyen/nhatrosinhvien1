<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datphong extends Model
{
    public    $timestamps   = false;

    protected $table        = 'datphong';
    protected $fillable     = ['dp_ghichu', 'nt_ma', 'dp_sdt', 'dp_thoigianketthuc', 'dp_trangthai', 'id'];
    
    public    $incrementing = false;


    protected $dates        = ['dp_thoigianketthuc'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
