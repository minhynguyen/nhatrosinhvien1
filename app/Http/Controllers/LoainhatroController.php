<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loainhatro;
use App\Http\Requests\LoaiNhaTroRequest;
class LoainhatroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsloainhatro = loainhatro::all();
        return view('backend.loainhatro.index')->with('dsloainhatro',$dsloainhatro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.loainhatro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoaiNhaTroRequest $request)
    {
        $validatedData = $request->validate([
        'lnlnt_ten' => 'required|max:50',
        'lnlnt_taomoi' => 'required',
        'lnlnt_capnhat' => 'required',
        'lnlnt_trangthai' => 'required',
        ]);
        try{
        $loainhatro = new loainhatro();
        $loainhatro->lnt_ten = $request->lnt_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $loainhatro->lnt_taomoi = $request->lnt_taomoi;
        $loainhatro->lnt_capnhat = $request->lnt_capnhat;
        $loainhatro->lnt_trangthai = $request->lnt_trangthai;
        $loainhatro->save();

        return redirect(route('loainhatro.index')); //trả về trang cần hiển thị
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
        $loainhatro = loainhatro::find($id);
        return view('backend.loainhatro.edit')->with('loainhatro', $loainhatro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LoaiNhaTroRequest $request, $id)
    {
        try{
        $loainhatro = loainhatro::find($id);
        $loainhatro->lnt_ten = $request->lnt_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $loainhatro->lnt_taomoi = $request->lnt_taomoi;
        $loainhatro->lnt_capnhat = $request->lnt_capnhat;
        $loainhatro->lnt_trangthai = $request->lnt_trangthai;
        $loainhatro->save();

        return redirect(route('loainhatro.index')); //trả về trang cần hiển thị
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
        $loainhatro = loainhatro::find($id);
        $loainhatro->delete();
        return redirect(route('loainhatro.index'));
    }
}
