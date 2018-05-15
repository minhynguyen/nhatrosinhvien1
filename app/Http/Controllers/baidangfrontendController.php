<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loainhatro;
use App\baidang;
use App\loaibaidang;
use App\tienich;
use App\nhatro;
use App\baidangtaikhoan;
use App\nhatro_tienich;
use App\hinhanh_nhatro;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Support\collection;
use App\Http\Requests\baidangrequest;

class baidangfrontendController extends Controller
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
        $current = new Carbon();
        $dsnhatro = DB::table('nhatro')->where('id',$id)->get();
        $dsdatphong = DB::table('datphong')->join('nhatro', 'nhatro.nt_ma', '=', 'datphong.nt_ma')->join('users', 'users.id', '=', 'datphong.id')->where('nhatro.id',$id)->where('dp_thoigianketthuc','>=', $current) ->orderBy('dp_thoigianketthuc', 'asc')->get();
        return view('frontend.profile')->with('dsloainhatro', $dsloainhatro)
                                         ->with('dstienich', $dstienich)
                                         ->with('dsnhatro', $dsnhatro)
                                         ->with('dsbaidang', $dsbaidang)
                                         ->with('dsdatphong', $dsdatphong)
                                         ->with('dsbaidangcho', $dsbaidangcho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $dsnhatro = DB::table('nhatro')->where('id',$id)->get();
        $dsloaibaidang = DB::table('loaibaidang')->where('lbd_trangthai','2')->get();
        // $dstienich = tienich::all();
        return view('frontend.nhatro.baidangcreate')->with('dsloaibaidang', $dsloaibaidang)->with('dsnhatro', $dsnhatro);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(baidangrequest $request)
    {
        try{
        $baidang = new baidang();
        $baidang->nt_ma = $request->nt_ma;
        $baidang->lbd_ma = $request->lbd_ma;
        $baidang->bd_tieude = $request->bd_tieude;
        $baidang->bd_noidung = $request->bd_noidung;
        $baidang->save();

        $baidangtaikhoan = new baidangtaikhoan();
        $baidangtaikhoan->id = Auth::user()->id;
        $baidangtaikhoan->bd_ma = $baidang->bd_ma;
        $baidangtaikhoan->save();

        

        return redirect(route('baidangfrontend.index')); //trả về trang cần hiển thị
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
        $dstienich = DB::table('nhatro_tienich')->join('tienich', 'tienich.ti_ma', '=', 'nhatro_tienich.ti_ma')->where('nt_ma', $id)->get();
        $tienich = tienich::all();
        $slider = DB::table('hinhanh_nhatro')->where('nt_ma',$id)->limit(3)->get();
        $baidang = baidang::find($id);
        // dd($slider);
        
        // $dshinhanh = DB::table('hinhanh_nhatro')->where('nt_ma',$id)->get();
        // dd($dshinhanh);
        return view('frontend.nhatro.show')->with('nhatro', $nhatro)->with('baidang', $baidang)->with('dstienich', $dstienich)->with('tienich', $tienich)->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baidang = baidang::find($id);
        $dsloaibaidang = loaibaidang::all();
        // $dsnhatro = nhatro::all();
        
        return view('frontend.nhatro.baidangedit')->with('baidang', $baidang)->with('dsloaibaidang', $dsloaibaidang);
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
        $baidang = baidang::find($id);
        // $baidang->nt_ma = $request->nt_ma;
        $baidang->lbd_ma = $request->lbd_ma;
        $baidang->bd_tieude = $request->bd_tieude;
        $baidang->bd_noidung = $request->bd_noidung;
        $baidang->save();

        return redirect(route('baidangfrontend.index')); //trả về trang cần hiển thị
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
        $baidang = baidang::find($id);
        $baidang->delete();
        return redirect(route('baidangfrontend.index'));
    }


    public function dangtin()
    {
        $id = Auth::user()->id;

        $nhatro = DB::table('nhatro')->join('o', 'o.nt_ma', '=', 'nhatro.nt_ma')->where('o.id',$id)->get();
        // dd($nhatro);
        $dsloaibaidang = loaibaidang::find(1);

        return view('frontend.nhatro.dangtinoghep')->with('nhatro', $nhatro)
                                                ->with('dsloaibaidang', $dsloaibaidang);
    }
}
