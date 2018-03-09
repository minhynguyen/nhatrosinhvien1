<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\truonghoc;
use App\loainhatro;
use App\tienich;
use DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dsTruong = DB::table('truong')->where('t_trangthai','2')->get();
        // $dsTruong = Truonghoc::all();
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        return view('frontend.index')->with('dsTruong', $dsTruong)
                                        ->with('dsloainhatro', $dsloainhatro)
                                         ->with('dstienich', $dstienich);

    }
    public function gettienich()
    {

        
        $dstienich = tienich::all();
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        return view('frontend.themnhatro')->with('dsloainhatro', $dsloainhatro)->with('dstienich', $dstienich);

    }


    // public function themnhatro(Request $request)
    // {
    //     // $validatedData = $request->validate([
    //     // 'lnt_ten' => 'required|max:50',
    //     // 'lnt_trangthai' => 'required',
    //     // ]);
    //     try{
    //     $nhatro = new nhatro();
    //     $nhatro->nt_ten = $request->nt_ten;
    //     $nhatro->nt_diachi = $request->nt_diachi;
    //     $nhatro->nt_kinhdo = $request->nt_kinhdo;
    //     $nhatro->nt_vido = $request->nt_vido;
    //     $nhatro->nt_thongtin = $request->nt_thongtin;
    //     $nhatro->nt_giadien = $request->nt_giadien;
    //     $nhatro->nt_gianuoc = $request->nt_gianuoc;
    //     $nhatro->id = $request->id;
    //     $nhatro->lnt_ma = $request->lnt_ma;
    //     $nhatro->save();

    //     foreach ($tienich['items'] as $key => $value) {
    //         $nhatro_tienich = new nhatro_tienich();
    //         $nhatro_tienich->nt_ma = $key;
    //         $nhatro_tienich->ti_ma = $request->ti_ma;

    //     }

    //     return redirect(route('frontend.profile')); //trả về trang cần hiển thị
    //     }
    //     catch(QueryException $ex){
    //         return reponse([
    //             'error' => true, 'message' => $ex->getMessage()], 500);
    //     }
    // }

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
        //
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
        //
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
