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
use App\Http\Requests\nhatrorequest;
use DB;
use Carbon\Carbon;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dsTruong = DB::table('truong')->where('t_trangthai','2')->get();
        // $dsTruong = Truonghoc::all();
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        $dstienich = tienich::all();
        $dsnhatro = DB::table('nhatro')
                ->join('users', 'users.id', '=', 'nhatro.id')
                ->where('nt_trangthai','1') 
                ->join('hinhanh_nhatro', 'hinhanh_nhatro.nt_ma', '=', 'nhatro.nt_ma')
                ->get();
                // dd($dsnhatro);
        // dd($dsnhatro);
        // $dsanh = hinhanh_nhatro::all();
        // $dsnhatro = DB::table('nhatro')->where('nt_trangthai','2')->get();
        return view('frontend.index')->with('dsTruong', $dsTruong)
                                        ->with('dsloainhatro', $dsloainhatro)
                                         ->with('dstienich', $dstienich)
                                         ->with('dsnhatro', $dsnhatro);

    }
    public function gettienich()
    {        
        $dstienich = tienich::all();
        $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
        return view('frontend.nhatro.create')->with('dsloainhatro', $dsloainhatro)->with('dstienich', $dstienich);

    }
    // public function book($id)
    // {
    //   $nhatro = DB::table('nhatro')->where('nt_ma',$id)->get();
    //   // dd($nhatro);
    //   // $nhatro = nhatro::find($id);
    //   return view('frontend.nhatro.datphong')->with('$nhatro', $nhatro);
    // }

    public function timnhatro(Request $request)
    {
        $lnt_ma = $request->lnt_ma;   

        $data = DB::table('nhatro')->where('lnt_ma', $lnt_ma)->get();


        return response()->json($data);
    }

    
     public function timkiem(Request $request){
       
        $lnt_ma = $request->loainhatro;
        $giatu = $request->giaTu;
        $giaden = $request->giaden;
        $dientich = $request->dientich;
        $sql = "SELECT * FROM nhatro a join hinhanh_nhatro b on a.nt_ma = b.nt_ma join users c on a.id = c.id ";
            $sqlWhere = "";
            if ($lnt_ma  != 0  || 
            $giatu != 0  || 
            $giaden   != 0  || 
            $dientich  != 0) {
            $sql .= "  WHERE  ";
            if ($lnt_ma != 0) {
                if ($sqlWhere != "") { $sqlWhere .= " AND "; }
                $sqlWhere .= " lnt_ma=$lnt_ma ";
            }
            if ($giatu != 0) {
                if ($sqlWhere != "") { $sqlWhere .= " AND "; }
                $sqlWhere .= " nt_giathue >= $giatu ";
            }            
            if ($giaden != 0) {
                if ($sqlWhere != "") { $sqlWhere .= " AND "; }
                $sqlWhere .= " nt_giathue <= $giaden";
            }
            if ($dientich != 0) {
                if ($sqlWhere != "") { $sqlWhere .= " AND "; }
                $sqlWhere .= " nt_dientich <= $dientich";
            }
            $sql .= $sqlWhere;          
            }
        
            $data = DB::select($sql);
            // dd($data);
            // ->join('hinhanh_nhatro', 'nhatro.nt_ma', '=', 'hinhanh_nhatro.nt_ma')
            // ->join('users', 'users.id', '=', 'nhatro.id');
            $dsTruong = DB::table('truong')->where('t_trangthai','2')->get();
                $dsloainhatro = DB::table('loainhatro')->where('lnt_trangthai','2')->get();
               return view('frontend.index', [
                        'dsTruong' =>$dsTruong,
                        'dsloainhatro' =>$dsloainhatro,
                        'dsnhatro' =>$data,
                        'loainhatro' =>$lnt_ma,
                        'giatu' =>$giatu,
                        'giaden' =>$giaden,
                        'dientich' =>$dientich,
                    ]);
       // }
       
          
         
    }


    public function getnhatro()
    {
        $id = Auth::user()->id;
        $dsbaidang = DB::table('baidang')->join('loaibaidang', 'baidang.lbd_ma', '=', 'loaibaidang.lbd_ma')->join('nhatro', 'nhatro.nt_ma', '=', 'baidang.nt_ma')->join('users', 'users.id', '=', 'nhatro.id')->join('baidangtaikhoan', 'baidangtaikhoan.bd_ma', '=', 'baidang.bd_ma')->where('baidangtaikhoan.id',$id)->paginate(3);
        $dsbaidangcho = DB::table('baidang')->join('loaibaidang', 'baidang.lbd_ma', '=', 'loaibaidang.lbd_ma')->join('nhatro', 'nhatro.nt_ma', '=', 'baidang.nt_ma')->join('users', 'users.id', '=', 'nhatro.id')->where('nhatro.id',$id)->where('baidang.bd_trangthai','2')->paginate(3);
        
        $dsnhatro = DB::table('nhatro')->where('id',$id)->paginate(5);

        $current = new Carbon();

        $dsdatphong = DB::table('datphong')->join('nhatro', 'nhatro.nt_ma', '=', 'datphong.nt_ma')->join('users', 'users.id', '=', 'datphong.id')->where('nhatro.id',$id)->where('dp_thoigianketthuc','>=', $current) ->orderBy('dp_thoigianketthuc', 'asc')->paginate(5);
        // dd($dsdatphong);
        return view('frontend.profile')->with('dsnhatro', $dsnhatro)
                                        ->with('dsbaidang', $dsbaidang)
                                        ->with('dsbaidangcho', $dsbaidangcho)
                                        ->with('dsdatphong', $dsdatphong);

    }


public function store(nhatrorequest $request)
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
        $nhatro->nt_sdtlienhe = $request->nt_sdtlienhe;
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
        }
        
            
        

        return redirect(route('index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        return view('frontend.nhatro.edit')->with('nhatro', $nhatro)
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
        
        
        $nhatro->nt_tinhtrang = $request->nt_tinhtrang;
        
        $nhatro->save();

        // $nhatro = nhatro::find($id);
        
        return redirect(route('nhatrofrontend.index')); //trả về trang cần hiển thị
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
        //
    }

}
