<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baidang;
use App\loaibaidang;
use App\nhatro;
use DB;
class baidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dsbaidang = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        // $dsloaibaidang = tienich::all();
        $dsbaidang = DB::table('baidang')->join('loaibaidang', 'baidang.lbd_ma', '=', 'loaibaidang.lbd_ma')->join('nhatro', 'nhatro.nt_ma', '=', 'baidang.nt_ma')->join('users', 'users.id', '=', 'nhatro.id')->get();
        
        return view('backend.baidang.index')->with('dsbaidang', $dsbaidang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsnhatro = nhatro::all();
        $dsloaibaidang = DB::table('loaibaidang')->where('lbd_trangthai','2')->get();
        // $dstienich = tienich::all();
        return view('backend.baidang.create')->with('dsloaibaidang', $dsloaibaidang)->with('dsnhatro', $dsnhatro);
                                         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        $baidang = new baidang();
        $baidang->nt_ma = $request->nt_ma;
        $baidang->lbd_ma = $request->lbd_ma;
        $baidang->bd_tieude = $request->bd_tieude;
        $baidang->bd_noidung = $request->bd_noidung;
        $baidang->bd_trangthai = $request->bd_trangthai;
        $baidang->save();

        return redirect(route('baidang.index')); //trả về trang cần hiển thị
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsloaibaidang = loaibaidang::all();
        $dsnhatro = nhatro::all();
        $baidang = baidang::find($id);
        return view('backend.baidang.edit')->with('baidang', $baidang)->with('dsnhatro', $dsnhatro)->with('dsloaibaidang', $dsloaibaidang);
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
        $baidang->bd_trangthai = $request->bd_trangthai;
        $baidang->save();

        return redirect(route('baidang.index')); //trả về trang cần hiển thị
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
        return redirect(route('baidang.index'));
    }
}
