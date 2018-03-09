<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loainhatro;
use App\tienich;
use App\nhatro;
use App\nhatro_tienich;
use Auth;
use DB;
use Illuminate\Support\collection;
use App\Http\Requests\nhatroRequest;
class nhatroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        $dsnhatro = nhatro::all();
        return view('backend.nhatro.index')->with('dsloainhatro', $dsloainhatro)
                                         ->with('dstienich', $dstienich)->with('dsnhatro', $dsnhatro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        return view('backend.nhatro.create')->with('dsloainhatro', $dsloainhatro)
                                         ->with('dstienich', $dstienich);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(nhatroRequest $request)
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
            'nt_ten'=>'unique:nhatro',
            'nt_diachi'=>'unique:nhatro',
        ]);
        try{
        $nhatro = new nhatro();
        $nhatro->nt_ten = $request->nt_ten;
        $nhatro->nt_diachi = $request->nt_diachi;
        $nhatro->nt_kinhdo = $request->nt_kinhdo;
        $nhatro->nt_vido = $request->nt_vido;
        $nhatro->nt_thongtin = $request->nt_thongtin;
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
        // $pic = $request->input('pic');
        // foreach ($pic as $pi) {
        //         if($request->hasFile('sp_hinh')){
        //             $file = $request->sp_hinh;
        //             $sanpham->sp_hinh = $file->getClientOriginalName();
        //             $file->move('upload', $sanpham->sp_hinh); //hàm này di chuyển ảnh tới thư mục public/upload
        //         }
        //     }
        

        return redirect(route('nhatro.index')); //trả về trang cần hiển thị
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
