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
