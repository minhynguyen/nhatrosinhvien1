<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\binhluan;
use DB;
use Auth;
use Yajra\Datatables\Datatables;

class binhluanbackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dstruong = truonghoc::paginate(10);
        $dsbinhluan = DB::table('binhluan')->join('users', 'binhluan.id', '=', 'users.id')->join('baidang', 'baidang.bd_ma', '=', 'binhluan.bd_ma')->paginate(10);
        
        return view('backend.binhluan.index')->with('dsbinhluan', $dsbinhluan);
    }


    public function getAddEditRemoveColumnData()
    {
        $binhluan = DB::table('binhluan')->join('users', 'binhluan.id', '=', 'users.id')->join('baidang', 'baidang.bd_ma', '=', 'binhluan.bd_ma')
            ->select(['users.name', 'baidang.bd_tieude', 'binhluan.bl_noidung', 'binhluan.bl_taomoi']);


        // $binhluan = binhluan::join('users', 'binhluan.id', '=', 'users.id')::join('baidang', 'baidang.bd_ma', '=', 'binhluan.bd_ma')
        //     ->select(['binhluan.name', 'binhluan.bd_tieude', 'binhluan.bl_noidung', 'binhluan.bl_taomoi']);
        return Datatables::of($binhluan)
            ->addColumn('action', function ($binhluan) {
                return '<button type="button" class="btn btn-danger"><a class="table-action-btn" title="Xóa" href="' . route('binhluan.delete', $binhluan->bl_noidung) . '"><i class="fa fa-trash"></i></a></button>';

            })
            
            ->make(true);
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
        $binhluan = DB::table('binhluan')->where('bl_noidung',$id)->delete();

        return redirect(route('binhluanadmin.index'));
    }
}
