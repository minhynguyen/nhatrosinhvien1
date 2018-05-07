<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\truonghoc;
use App\Http\Requests\TruongHocRequest;
use DB;
use Yajra\Datatables\Datatables;
class TruonghocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dstruong = truonghoc::paginate(10);
        $dstruong = truonghoc::all();
        return view('backend.truong.index')->with('dstruong',$dstruong);
    }

    // public function anyData()
    // {
    //     return Datatables::of(truong::query())->make(true);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.truong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TruongHocRequest $request)
    {
        $validatedData = $request->validate([
        't_ten' => 'required|max:200',
        't_vido' => 'required',
        't_kinhdo' => 'required',
        't_trangthai' => 'required',
        ]);
        try{
        $truong = new truonghoc();
        $truong->t_ten = $request->t_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $truong->t_kinhdo = $request->t_kinhdo;
        $truong->t_vido = $request->t_vido;
        $truong->t_trangthai = $request->t_trangthai;
        $truong->save();

        return redirect(route('truong.index')); //trả về trang cần hiển thị
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

    public function getAddEditRemoveColumnData()
    {
        $truonghoc = truonghoc::select(['t_ma', 't_ten', 't_kinhdo', 't_vido', 't_trangthai']);

        return Datatables::of($truonghoc)
            ->addColumn('action', function ($truonghoc) {
                return '<button type="button" class="btn btn-warning"><a class="table-action-btn" title="Chỉnh sửa" href="' . route('truong.edit', $truonghoc->t_ma) . '"><i class="fa fa-pencil"></i></a></button>

                    <button type="button" class="btn btn-danger"><a class="table-action-btn" title="Xóa" href="' . route('truong.delete', $truonghoc->t_ma) . '"><i class="fa fa-trash"></i></a></button>';

            })
            ->editColumn('t_trangthai', '@if ($t_trangthai =="2")Khả Dụng @else Khóa  @endif')
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truong = truonghoc::find($id);
        return view('backend.truong.edit')->with('truong', $truong);
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
        $truong = truonghoc::find($id);
        $truong->t_ten = $request->t_ten; //trước giống tên cột sau giống tên input ở form nhập liệu
        $truong->t_taomoi = $request->t_taomoi;
        $truong->t_vido = $request->t_vido;
        $truong->t_kinhdo = $request->t_kinhdo;
        $truong->t_capnhat = $request->t_capnhat;
        $truong->t_trangthai = $request->t_trangthai;
        $truong->save();

        return redirect(route('truong.index')); //trả về trang cần hiển thị
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
        $truong = truonghoc::find($id);
        $truong->delete();
        return redirect(route('truong.index'));
    }
}
