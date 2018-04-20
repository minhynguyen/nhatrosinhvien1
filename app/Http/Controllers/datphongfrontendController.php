<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\nhatro;
use App\datphong;
use App\users;
use Auth;
use Carbon\Carbon;
use Mail;
use App\Mail\bookEmail;
use App\Mail\ThongbaodatphongEmail;


class datphongfrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $datphong = new datphong();
        $datphong->dp_ghichu = $request->dp_ghichu;
        $datphong->dp_sdt = $request->dp_sdt;
        $datphong->nt_ma = $request->nt_ma;
        $datphong->id = Auth::user()->id;
        $datphong->dp_thoigiandat = Carbon::now();
        $datphong->dp_thoigianketthuc = Carbon::now()->addHours(6);
        $datphong->save();
        $send = DB::table('datphong')->orderBy('dp_thoigiandat', 'desc')->join('nhatro', 'nhatro.nt_ma', '=', 'datphong.nt_ma')->join('users', 'nhatro.id', '=', 'users.id')->first();


        $mailnhan = $send->email;
        // dd($mailnhan);

        $mail = Auth::user()->email;
        // dd($mail);
        Mail::to($mail)
            ->send(new bookEmail($send));

        Mail::to($mailnhan)
            ->send(new ThongbaodatphongEmail($send));
        
        return redirect(route('index')); //trả về trang cần hiển thị
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
        $current = new Carbon();
        $nhatro = nhatro::find($id);
        $dsdat = DB::table('datphong')->where('nt_ma', $id)->where('dp_thoigianketthuc','>=', $current)->orderBy('dp_thoigianketthuc', 'asc')->get();
        // $dsdat = datphong::find($id);
        // dd($dsdat);

        return view('frontend.nhatro.datphong')->with('nhatro', $nhatro)
                                                ->with('dsdat', $dsdat);
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
