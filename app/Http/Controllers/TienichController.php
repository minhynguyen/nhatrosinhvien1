<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tienich;
use App\Http\Requests\tienichRequest;
use Yajra\Datatables\Datatables;

class TienichController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dstienich = tienich::all();
        return view('backend.tienich.index')->with('dstienich',$dstienich);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tienich.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tienichRequest $request)
    {
        $validatedData = $request->validate([
        'ti_ten' => 'required|max:30|unique:tienich',
        'ti_diengiai' => 'required',

        ]);
        try{
        $tienich = new tienich();
        $tienich->ti_ten = $request->ti_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $tienich->ti_diengiai = $request->ti_diengiai;
        // $tienich->ti_taomoi = $request->ti_taomoi;
        // $tienich->ti_capnhat = $request->ti_capnhat;
        $tienich->save();

        return redirect(route('tienich.index')); //trả về trang cần hiển thị
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
        $tienich = tienich::find($id);
        return view('backend.tienich.edit')->with('tienich', $tienich);
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
        $tienich = tienich::find($id);
        $tienich->ti_ten = $request->ti_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $tienich->ti_diengiai = $request->ti_diengiai;
        $tienich->ti_trangthai = $request->ti_trangthai;
        $tienich->save();

        return redirect(route('tienich.index')); //trả về trang cần hiển thị
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
        $tienich = tienich::find($id);
        $tienich->delete();
        return redirect(route('tienich.index'));
    }



    public function getAddEditRemoveColumnData()
    {
        $tienich = tienich::select(['ti_ma', 'ti_ten', 'ti_diengiai','ti_trangthai']);

        return Datatables::of($tienich)
            ->addColumn('action', function ($tienich) {
                return '<button type="button" class="btn btn-warning"><a class="table-action-btn" title="Chỉnh sửa" href="' . route('tienich.edit', $tienich->ti_ma) . '"><i class="fa fa-pencil"></i></a></button>

                    <button type="button" class="btn btn-danger"><a class="table-action-btn" title="Xóa" href="' . route('tienich.delete', $tienich->ti_ma) . '"><i class="fa fa-trash"></i></a></button>';


            })
            ->editColumn('ti_trangthai', '@if ($ti_trangthai =="2")Khả Dụng @else Khóa  @endif')
        
        


            ->make(true);
    }
}
