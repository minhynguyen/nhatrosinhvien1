<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phongtro extends Model
{
    const CREATED_AT ='pt_taomoi';
    const UPDATED_AT ='pt_capnhat';
    
    protected $table = 'phongtro';
    protected $fillable = ['pt_ten', 'pt_giaphong', 'pt_dientich', 'pt_trangthai', 'nt_ma'];
    protected $guarded = ['pt_ma'];
    protected $primaryKey = 'pt_ma';
    protected $dates =['pt_taomoi', 'pt_capnhat'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public function nhatro(){
    	return $this->belongsTo('App\nhatro', 'nt_ma', 'nt_ma');
    	// mot pt chi thuoc 1 nt
    }
}
