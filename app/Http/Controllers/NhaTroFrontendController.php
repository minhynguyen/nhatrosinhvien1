<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\loainhatro;
use App\loaibaidang;
use App\baidang;
use App\tienich;
use App\nhatro;
use App\binhluan;
use App\nhatro_tienich;
use App\hinhanh_nhatro;
use Auth;
use DB;
use Illuminate\Support\collection;
use App\Http\Requests\nhatrorequest;

class NhaTroFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $id = Auth::user()->id;
        $dsbaidang = DB::table('baidang')->join('loaibaidang', 'baidang.lbd_ma', '=', 'loaibaidang.lbd_ma')->join('nhatro', 'nhatro.nt_ma', '=', 'baidang.nt_ma')->join('users', 'users.id', '=', 'nhatro.id')->where('nhatro.id',$id)->get();
        $dsbaidangcho = DB::table('baidang')->join('loaibaidang', 'baidang.lbd_ma', '=', 'loaibaidang.lbd_ma')->join('nhatro', 'nhatro.nt_ma', '=', 'baidang.nt_ma')->join('users', 'users.id', '=', 'nhatro.id')->where('nhatro.id',$id)->where('baidang.bd_trangthai','2')->get();
        $dstienich = tienich::all();
        $dsnhatro = DB::table('nhatro')->where('id',$id)->get();
        return view('frontend.profile')->with('dsloainhatro', $dsloainhatro)
                                         ->with('dstienich', $dstienich)->with('dsnhatro', $dsnhatro)->with('dsbaidang', $dsbaidang)->with('dsbaidangcho', $dsbaidangcho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsloaibaidang = DB::table('loaibaidang')->where('lbd_trangthai','2')->get();
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        return view('frontend.nhatro.create')->with('dsloainhatro', $dsloainhatro)->with('dsloaibaidang', $dsloaibaidang)->with('dstienich', $dstienich);

        
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(nhatrorequest $request)
    {
        $validatedData = $request->validate([
            'nt_ten' => 'required|max:50',
            'nt_kinhdo' => 'required',
            'nt_vido' => 'required',
            'nt_sdtlienhe' => 'required',
            'nt_diachi' => 'required',
            'nt_giadien' => 'required',
            'nt_gianuoc' => 'required',
            'lnt_ma' => 'required',
            // 'nt_ten'=>'unique:nhatro',
            'nt_diachi'=>'unique:nhatro',
        ]);
        try{
        $nhatro = new nhatro();
        $nhatro->nt_ten = $request->nt_ten;
        $nhatro->nt_diachi = $request->nt_diachi;
        $nhatro->nt_sdtlienhe = $request->nt_sdtlienhe;
        $nhatro->nt_kinhdo = $request->nt_kinhdo;
        $nhatro->nt_vido = $request->nt_vido;
        $nhatro->nt_dientich = $request->nt_dientich;
        $nhatro->nt_giathue = $request->nt_giathue;
        $nhatro->nt_giadien = $request->nt_giadien;
        $nhatro->nt_gianuoc = $request->nt_gianuoc;
        $nhatro->id = Auth::user()->id;
        $nhatro->lnt_ma = $request->lnt_ma;
        $nhatro->save();
        
        $tienich = $request->input('tienich');
        // dd($tienich);
        foreach ($tienich as $ti) {
            $nhatro_tienich = new nhatro_tienich();
            $nhatro_tienich->nt_ma = $nhatro->nt_ma;
            $nhatro_tienich->ti_ma = $ti;
            $nhatro_tienich->save();
        }
        $input=$request->all();
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $hinhanh_nhatro = new hinhanh_nhatro();
                $hinhanh_nhatro->nt_ma = $nhatro->nt_ma;

                $name=$file->getClientOriginalName();
                $file->move('upload',$name);
                $hinhanh_nhatro->ha_ten = $name;
                $images[]=$name;
                $hinhanh_nhatro->save();
            }
        }else{
            $hinhanh_nhatro = new hinhanh_nhatro();
            $hinhanh_nhatro->nt_ma = $nhatro->nt_ma;
            $hinhanh_nhatro->ha_ten = 'comingsoon.png';
                // $images[]=$name;
                $hinhanh_nhatro->save();
        }

        $baidang = new baidang();
        $baidang->nt_ma = $nhatro->nt_ma;
        $baidang->lbd_ma = $request->lbd_ma;
        $baidang->bd_tieude = $request->bd_tieude;
        $baidang->bd_noidung = $request->bd_noidung;
        $baidang->save();


        

        return redirect(route('profile')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhatro = DB::table('nhatro')->join('users', 'users.id', '=', 'nhatro.id')->join('loainhatro', 'loainhatro.lnt_ma', '=', 'nhatro.lnt_ma')->where('nt_ma', $id)->get();
        $baidang = DB::table('baidang')->join('loaibaidang', 'loaibaidang.lbd_ma', '=', 'baidang.lbd_ma')->where('nt_ma',$id)->get();
        $idbaidang = DB::table('baidang')->join('nhatro', 'baidang.nt_ma', '=', 'nhatro.nt_ma')->where('baidang.nt_ma',$id)->value('bd_ma');
        
        $dsbinhluan = DB::table('binhluan')->join('users', 'users.id', '=', 'binhluan.id')->where('binhluan.bd_ma', $idbaidang)->get();
        // dd($dsbinhluan);
        $dstienich = DB::table('nhatro_tienich')->join('tienich', 'tienich.ti_ma', '=', 'nhatro_tienich.ti_ma')->where('nt_ma', $id)->get();
        $tienich = tienich::all();
        $slider = DB::table('hinhanh_nhatro')->where('nt_ma',$id)->limit(3)->get();
        // $binhluan = DB::table('binhluan')->where('_ma',$id)->limit(3)->get();
        
        // $dshinhanh = DB::table('hinhanh_nhatro')->where('nt_ma',$id)->get();
        // dd($dshinhanh);
        return view('frontend.nhatro.show')->with('nhatro', $nhatro)->with('dstienich', $dstienich)->with('tienich', $tienich)->with('slider', $slider)->with('baidang', $baidang)->with('dsbinhluan', $dsbinhluan)->with('slider', $slider)->with('baidang', $baidang);
    }


    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        

        $nhatro = nhatro::find($id);
        return view('frontend.nhatro.edit')->with('nhatro', $nhatro)
        ->with('dsloainhatro', $dsloainhatro)->with('dstienich', $dstienich);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
        $nhatro = nhatro::find($id);
        
        $nhatro->nt_ten = $request->nt_ten;
        $nhatro->nt_diachi = $request->nt_diachi;
        $nhatro->nt_sdtlienhe = $request->nt_sdtlienhe;
        $nhatro->nt_kinhdo = $request->nt_kinhdo;
        $nhatro->nt_vido = $request->nt_vido;
        $nhatro->nt_dientich = $request->nt_dientich;
        $nhatro->nt_giathue = $request->nt_giathue;
        $nhatro->nt_giadien = $request->nt_giadien;
        $nhatro->nt_gianuoc = $request->nt_gianuoc;
        $nhatro->nt_tinhtrang = $request->nt_tinhtrang;
        $nhatro->id = Auth::user()->id;
        $nhatro->lnt_ma = $request->lnt_ma;
        $nhatro->save();

        // $nhatro = nhatro::find($id);
        
        
            
        

        return redirect(route('nhatrofrontend.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
