<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\binhluan;
use DB;
use Auth;

class binhluanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $dsbinhluan = DB::table('binhluan')->join('users', 'binhluan.id', '=', 'users.id')->join('baidang', 'baidang.bd_ma', '=', 'binhluan.bd_ma')->get();
        
        return view('backend.binhluan.index')->with('dsbinhluan', $dsbinhluan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $binhluan = new binhluan();
        $binhluan->bd_ma = $request->bd_ma;
        $binhluan->bl_noidung = $request->bl_noidung;
        $binhluan->id = Auth::user()->id;
        $binhluan->save();

        return redirect(route('nhatrofrontend.show')); //trả về trang cần hiển thị
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
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            // dd($id);
        $binhluan = new binhluan();
        $binhluan->bd_ma = $id;
        $binhluan->bl_noidung = $request->bl_noidung;
        $binhluan->id = Auth::user()->id;
        $binhluan->save();

        $idnhatro = DB::table('baidang')->join('nhatro', 'baidang.nt_ma', '=', 'nhatro.nt_ma')->where('baidang.bd_ma',$id)->value('nhatro.nt_ma');
        // dd($idnhatro);



        return redirect(route('nhatrofrontend.show', ['nhatro' => $idnhatro])); //trả về trang cần hiển thị
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
        $binhluan = DB::table('binhluan')->where('bl_noidung',$id)->delete();

        return redirect(route('binhluan.index'));
        
    }
}
