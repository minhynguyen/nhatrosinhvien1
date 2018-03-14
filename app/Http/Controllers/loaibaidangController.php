<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaibaidang;
use App\Http\Requests\loaibaidangrequest;

class loaibaidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsloaibaidang = loaibaidang::all();
        return view('backend.loaibaidang.index')->with('dsloaibaidang',$dsloaibaidang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.loaibaidang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'lbd_ten' => 'required|max:50',
        'lbd_trangthai' => 'required',
        ]);
        try{
        $loaibaidang = new loaibaidang();
        $loaibaidang->lbd_ten = $request->lbd_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $loaibaidang->lbd_trangthai = $request->lbd_trangthai;
        $loaibaidang->save();

        return redirect(route('loaibaidang.index')); //trả về trang cần hiển thị
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
         $loaibaidang = loaibaidang::find($id);
        return view('backend.loaibaidang.edit')->with('loaibaidang', $loaibaidang);
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
        $loaibaidang = loaibaidang::find($id);
        $loaibaidang->lbd_ten = $request->lbd_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $loaibaidang->lbd_trangthai = $request->lbd_trangthai;
        $loaibaidang->save();

        return redirect(route('loaibaidang.index')); //trả về trang cần hiển thị
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
        $loaibaidang = loaibaidang::find($id);
        $loaibaidang->delete();
        return redirect(route('loaibaidang.index'));
    }
}
