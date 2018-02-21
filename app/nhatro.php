<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhatro extends Model
{
    const CREATED_AT ='nt_taomoi';
    const UPDATED_AT ='nt_capnhat';
    
    protected $table = 'nhatro';
    protected $fillable = ['nt_ten', 'nt_diachi', 'nt_kinhdo', 'nt_vido', 'nt_thongtin', 'nt_giadien', 'nt_gianuoc', 'nt_hinh', 'nt_taomoi', 'nt_capnhat', 'nt_trangthai', 'id'];
    protected $guarded = ['nt_ma'];
    protected $primaryKey = 'nt_ma';
    protected $dates =['nt_taomoi', 'nt_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function user(){
    	return $this->belongsTo('App\User', 'id', 'id');
    	// mot nha tro chi thuoc 1 user
    }
    public function phongtros(){
    	return $this->hasMany('App\phongtro', 'nt_ma', 'nt_ma');
    	// mot nt co nhieu pt hasMany()
    }
}
