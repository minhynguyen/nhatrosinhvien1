<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\truonghoc;
use Auth;
use App\loainhatro;
use App\tienich;
use App\nhatro;
use App\baidang;
use App\baidangtaikhoan;
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
        ->join('users', 'users.id', '=', 'o.id')->where('o.id', $id)->paginate(5);

        $count = DB::table('hoc')->join('truong', 'hoc.t_ma', '=', 'truong.t_ma')
        ->join('users', 'users.id', '=', 'hoc.id')->where('hoc.id', $id)->count();


        $dsbaidang = DB::table('baidang')
        ->join('baidangtaikhoan', 'baidangtaikhoan.bd_ma', '=', 'baidang.bd_ma')
        ->join('users', 'users.id', '=', 'baidangtaikhoan.id')
        ->join('nhatro', 'baidang.nt_ma', '=', 'nhatro.nt_ma')
        ->where('baidangtaikhoan.id', $id)
        ->paginate(5);
                                    // dd($dsbaidang);
        
        return view('frontend.ttsinhvien')->with('hoc', $hoc)
                                    ->with('count', $count)->with('o', $o)
                                    ->with('dstruong', $dstruong)
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
        DB::table('o')
              ->where('nt_ma', '=', $id)
              ->delete();
        $taikhoan = Auth::user()->id;
       
        $baidang = DB::table('baidang')
        ->join('baidangtaikhoan', 'baidangtaikhoan.bd_ma', '=', 'baidang.bd_ma')
        ->join('users', 'users.id', '=', 'baidangtaikhoan.id')
        ->join('nhatro', 'baidang.nt_ma', '=', 'nhatro.nt_ma')
        ->where('baidangtaikhoan.id', $taikhoan)
        ->where('baidang.nt_ma', '=', $id)
        ->delete();
        return redirect(route('sinhvien.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taikhoan = Auth::user()->id;
        $count = DB::table('o')->where('o.id', $taikhoan)
        ->where('o.nt_ma', '=', $id)->count();
        // dd($count);

        try{
        if($count != 1){
        $o = new o();
        $o->nt_ma = $id; //trước giống tên cột sau giống tên input ở form nhập liệu
        $o->id = Auth::user()->id; //trước giống tên cột sau giống tên input ở form nhập liệu
        
        $o->save();

        return redirect(route('sinhvien.index'))->with('alert-success', 'Lưu Nhà Trọ Thành Công'); //trả về trang cần hiển thị
        }
        else{
            return redirect(route('sinhvien.index'))->with('alert-error', 'Lưu Nhà Trọ Không Thành Công');
        }
    }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }


    public function editbaidang($id)
    {
        $baidang = baidang::find($id);
        $dsloaibaidang = loaibaidang::find(1);
        // $dsnhatro = nhatro::all();
        
        return view('frontend.nhatro.baidangoghepdit')->with('baidang', $baidang)->with('dsloaibaidang', $dsloaibaidang);
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
        $baidang->bd_tieude = $request->bd_tieude;
        $baidang->bd_noidung = $request->bd_noidung;
        $baidang->save();

        return redirect(route('sinhvien.index')); //trả về trang cần hiển thị
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
        return redirect(route('sinhvien.index'));
    }
}
