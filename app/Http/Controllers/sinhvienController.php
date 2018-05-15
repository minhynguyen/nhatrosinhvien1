<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\truonghoc;
use Auth;
use App\loainhatro;
use App\tienich;
use App\nhatro;
use App\nhatro_tienich;
use App\hinhanh_nhatro;
use App\datphong;
use App\hoc;
use App\o;
use App\Http\Requests\nhatrorequest;
use DB;
use Carbon\Carbon;

class sinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        
        $dstruong = DB::table('truong')->get();
        $hoc = DB::table('hoc')->join('truong', 'hoc.t_ma', '=', 'truong.t_ma')
        ->join('users', 'users.id', '=', 'hoc.id')->where('hoc.id', $id)->get();


        $o = DB::table('o')->join('nhatro', 'nhatro.nt_ma', '=', 'o.nt_ma')
        ->join('users', 'users.id', '=', 'o.id')->where('o.id', $id)->get();

        $count = DB::table('hoc')->join('truong', 'hoc.t_ma', '=', 'truong.t_ma')
        ->join('users', 'users.id', '=', 'hoc.id')->where('hoc.id', $id)->count();
                                    // dd($count);
        
        return view('frontend.ttsinhvien')->with('hoc', $hoc)->with('count', $count)->with('o', $o)
                                    ->with('dstruong', $dstruong);
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
        
        // dd($request);
        try{
        $hoc = new hoc();
        $hoc->t_ma = $request->t_ma; //trước giống tên cột sau giống tên input ở form nhập liệu
        $hoc->id = Auth::user()->id; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $hoc->save();

        return redirect(route('sinhvien.index')); //trả về trang cần hiển thị
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
        try{
        $o = new o();
        $o->nt_ma = $id; //trước giống tên cột sau giống tên input ở form nhập liệu
        $o->id = Auth::user()->id; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $o->save();

        return redirect(route('sinhvien.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
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
