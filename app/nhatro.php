<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhatro extends Model
{
    const CREATED_AT ='nt_taomoi';
    const UPDATED_AT ='nt_capnhat';
    
    protected $table = 'nhatro';
    protected $fillable = ['nt_ten','nt_sdtlienhe', 'nt_diachi', 'nt_kinhdo', 'nt_vido', 'nt_giathue', 'nt_giadien', 'nt_gianuoc', 'nt_hinh', 'nt_taomoi', 'nt_capnhat', 'nt_trangthai', 'id', 'lnt_ma'];
    protected $guarded = ['nt_ma'];
    protected $primaryKey = 'nt_ma';
    protected $dates =['nt_taomoi', 'nt_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';


}
