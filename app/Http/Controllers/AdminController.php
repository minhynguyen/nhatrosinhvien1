<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baidang;
use App\nhatro;
use App\users;
use DB;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $day = $now->toDateString(); 
        $dsnhatro = DB::table('nhatro')->count();
        $dsnhatronew = DB::table('nhatro')->whereDate('nt_taomoi', $day)->count();
        $dsbaidang = DB::table('baidang')->count();
        $dsbaidangnew = DB::table('baidang')->whereDate('bd_taomoi', $day)->count();
        $dscommment = DB::table('binhluan')->count();
        $dsusernew = DB::table('users')->whereDate('created_at', $day)->count();
        $dsuser = DB::table('users')->count();
        return view('backend.admin.index')
                        ->with('dsnhatronew', $dsnhatronew)
                        ->with('dsuser', $dsuser)
                        ->with('dsusernew', $dsusernew)
                        ->with('dscommment', $dscommment)
                        ->with('dsnhatro', $dsnhatro)
                        ->with('dsbaidangnew', $dsbaidangnew)
                        ->with('dsbaidang', $dsbaidang);
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
