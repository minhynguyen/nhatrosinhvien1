<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loainhatro;
use App\baidang;
use App\tienich;
use App\nhatro;
use App\nhatro_tienich;
use App\hinhanh_nhatro;
use App\baidangtaikhoan;
use Auth;
use DB;
use Illuminate\Support\collection;
use App\Http\Requests\nhatrorequest;
use Yajra\Datatables\Datatables;
use Barryvdh\DomPDF\Facade as PDF;
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
        $dsnhatro = DB::table('nhatro')->join('loainhatro', 'nhatro.lnt_ma', '=', 'loainhatro.lnt_ma')->paginate(10);
        // $dsnhatro = DB::table('nhatro')->join('hinhanh_nhatro', 'nhatro.nt_ma', '=', 'hinhanh_nhatro.nt_ma')->join('users', 'users.id', '=', 'nhatro.id')->where('nt_trangthai','2')->get();
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
        $dsloaibaidang = DB::table('loaibaidang')->where('lbd_trangthai','2')->get();
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        return view('backend.nhatro.create')->with('dsloainhatro', $dsloainhatro)
                                            ->with('dstienich', $dstienich)
                                            ->with('dsloaibaidang', $dsloaibaidang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(nhatrorequest $request)
    {
        $validatedData = $request->validate([
            'nt_ten' => 'required|max:50',
            'nt_kinhdo' => 'required',
            'nt_vido' => 'required',
            'nt_sdtlienhe' => 'required',
            'nt_diachi' => 'required',
            'nt_dientich' => 'required',
            'nt_giadien' => 'required',
            'nt_gianuoc' => 'required',
            'lnt_ma' => 'required',
            // 'nt_ten'=>'unique:nhatro',
            'nt_diachi'=>'unique:nhatro',
        ]);
        try{
        $nhatro = new nhatro();
        $nhatro->nt_ten = $request->nt_ten;
        $nhatro->nt_diachi = $request->nt_diachi;
        $nhatro->nt_sdtlienhe = $request->nt_sdtlienhe;
        $nhatro->nt_kinhdo = $request->nt_kinhdo;
        $nhatro->nt_vido = $request->nt_vido;
        $nhatro->nt_dientich = $request->nt_dientich;
        $nhatro->nt_giathue = $request->nt_giathue;
        $nhatro->nt_giadien = $request->nt_giadien;
        $nhatro->nt_gianuoc = $request->nt_gianuoc;
        $nhatro->nt_tinhtrang = $request->nt_tinhtrang;
        $nhatro->nt_trangthai = $request->nt_trangthai;
        $nhatro->id = Auth::user()->id;
        $nhatro->lnt_ma = $request->lnt_ma;
        $nhatro->save();
        
        $tienich = $request->input('tienich');
        if(empty($tienich)){
        
        }
        else{
            foreach ($tienich as $ti) {
                $nhatro_tienich = new nhatro_tienich();
                $nhatro_tienich->nt_ma = $nhatro->nt_ma;
                $nhatro_tienich->ti_ma = $ti;
                $nhatro_tienich->save();
            }
        }

        
        $input=$request->all();
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $hinhanh_nhatro = new hinhanh_nhatro();
                $hinhanh_nhatro->nt_ma = $nhatro->nt_ma;
                $name=$file->getClientOriginalName();
                $file->move('upload',$name);
                $hinhanh_nhatro->ha_ten = $name;
                $images[]=$name;
                $hinhanh_nhatro->save();
            }
        }else{
            $hinhanh_nhatro = new hinhanh_nhatro();
            $hinhanh_nhatro->nt_ma = $nhatro->nt_ma;
            $hinhanh_nhatro->ha_ten = 'comingsoon.png';
                // $images[]=$name;
                $hinhanh_nhatro->save();
        }


        $baidang = new baidang();
        $baidang->nt_ma = $nhatro->nt_ma;
        $baidang->lbd_ma = $request->lbd_ma;
        $baidang->bd_tieude = $request->bd_tieude;
        $baidang->bd_noidung = $request->bd_noidung;
        $baidang->bd_trangthai = 1;
        $baidang->save();


        $baidangtaikhoan = new baidangtaikhoan();
        $baidangtaikhoan->id = Auth::user()->id;
        $baidangtaikhoan->bd_ma = $baidang->bd_ma;
        $baidangtaikhoan->save();
        // $images = $request->input('images');
        // foreach ($images as $pi) {
        //         $hinhanh_nhatro = new hinhanh_nhatro();
        //         $hinhanh_nhatro->nt_ma = $nhatro->nt_ma;
        //         $file = $request->$pi;
        //         $hinhanh_nhatro->ha_ten = $file->getClientOriginalName();
        //         $file->move('upload', $hinhanh_nhatro->ha_ten); //hàm này di chuyển ảnh tới thư mục public/upload
        //         $hinhanh_nhatro->save();
        // }
            
        

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
        
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        $nhatro = nhatro::find($id);
        return view('backend.nhatro.edit')->with('nhatro', $nhatro)
        ->with('dsloainhatro', $dsloainhatro)->with('dstienich', $dstienich);
                                         
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
        $nhatro = nhatro::find($id);
        
        
        $nhatro->nt_ten = $request->nt_ten;
        $nhatro->nt_diachi = $request->nt_diachi;
        $nhatro->nt_sdtlienhe = $request->nt_sdtlienhe;
        $nhatro->nt_kinhdo = $request->nt_kinhdo;
        $nhatro->nt_vido = $request->nt_vido;
        $nhatro->nt_dientich = $request->nt_dientich;
        $nhatro->nt_giathue = $request->nt_giathue;
        $nhatro->nt_giadien = $request->nt_giadien;
        $nhatro->nt_gianuoc = $request->nt_gianuoc;
        $nhatro->nt_tinhtrang = $request->nt_tinhtrang;
        $nhatro->nt_trangthai = $request->nt_trangthai;
        // $nhatro->id = Auth::user()->id;
        $nhatro->lnt_ma = $request->lnt_ma;
        $nhatro->save();

        // $baidang = baidang::find($id);
        
        // $tienich = $request->input('tienich');
        // // dd($tienich);
        // foreach ($tienich as $ti) {
        //     $nhatro_tienich = nhatro_tienich::find($id);
        //     dd($nhatro_tienich);
        //     // $nhatro_tienich->nt_ma = $nhatro->nt_ma;
        //     $nhatro_tienich->ti_ma = $ti;

        //     $nhatro_tienich->save();
        // }
        // $input=$request->all();
        // $images=array();
        // if($files=$request->file('images')){
        //     foreach($files as $file){
        //         $hinhanh_nhatro = hinhanh_nhatro::find($id);
        //         // $hinhanh_nhatro->nt_ma = $nhatro->nt_ma;

        //         $name=$file->getClientOriginalName();
        //         $file->move('upload',$name);
        //         $hinhanh_nhatro->ha_ten = $name;
        //         $images[]=$name;
        //         $hinhanh_nhatro->save();
        //     }
        // }
        // $images = $request->input('images');
        // foreach ($images as $pi) {
        //         $hinhanh_nhatro = new hinhanh_nhatro();
        //         $hinhanh_nhatro->nt_ma = $nhatro->nt_ma;
        //         $file = $request->$pi;
        //         $hinhanh_nhatro->ha_ten = $file->getClientOriginalName();
        //         $file->move('upload', $hinhanh_nhatro->ha_ten); //hàm này di chuyển ảnh tới thư mục public/upload
        //         $hinhanh_nhatro->save();
        // }
            
        

        return redirect(route('nhatro.index')); //trả về trang cần hiển thị
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

        $nhatro = nhatro::find($id);
        $nhatro->delete();
        $res=nhatro_tienich::where('nt_ma',$id)->delete();
        // $nhatro_tienich = nhatro_tienich::find($id);
        // $nhatro_tienich->delete();
        return redirect(route('nhatro.index'));
    }


    public function getAddEditRemoveColumnData()
    {
        $dsnhatro = DB::table('nhatro')->join('loainhatro', 'nhatro.lnt_ma', '=', 'loainhatro.lnt_ma')->join('users', 'users.id', '=', 'nhatro.id')
            ->select(['nt_ma', 'users.name', 'nt_ten', 'loainhatro.lnt_ten', 'nt_diachi', 'nt_giathue', 'nt_dientich', 'nt_tinhtrang', 'nt_trangthai']);

            

        return Datatables::of($dsnhatro)
            ->addColumn('action', function ($dsnhatro) {
                return '<button type="button" class="btn btn-warning"><a class="table-action-btn" title="Chỉnh sửa" href="' . route('nhatro.edit', $dsnhatro->nt_ma) . '"><i class="fa fa-pencil"></i></a></button>

                    <button type="button" class="btn btn-danger"><a class="table-action-btn" title="Xóa" href="' . route('nhatro.delete', $dsnhatro->nt_ma) . '"><i class="fa fa-trash"></i></a></button>';

            })
            ->editColumn('nt_trangthai', '@if ($nt_trangthai =="1")Đã Duyệt @else Chờ Duyệt  @endif')
            ->editColumn('nt_tinhtrang', '@if ($nt_tinhtrang =="0")Hết Phòng @else Còn Phòng  @endif')
            ->make(true);
    }


    public function pdf()
    {
        try{
            
            $dsnhatro = DB::table('nhatro')->join('loainhatro', 'nhatro.lnt_ma', '=', 'loainhatro.lnt_ma')->join('users', 'users.id', '=', 'nhatro.id')->get();
            // $dsChude = ChuDe::take(20)->get(); // hàm này lấy 20 dòng không lấy hết
            //dd($dsChude);
            $data = [
                'dsnhatro' => $dsnhatro,
            ];
            // xem trước pdf
            return view('backend.nhatro.nhatropdf')->with('dsnhatro', $dsnhatro);

            // xuất pdf và cho download
            $pdf = PDF::loadView('backend.nhatro.nhatropdf', $data);
            return $pdf->download('DanhSachNhaTro.pdf');
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);

        } catch(PDOExpection $ex){
            return reponse([
                'error' => true,
                'message' => $ex->getMessage()
            ], 200);
        }
       
    }
}
