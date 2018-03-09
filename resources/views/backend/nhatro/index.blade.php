@extends('backend.layouts.app')   

@section('title')
  Trường Học
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC NHÀ TRỌ
        <small>Tọa Độ Của Các Trường Đại Học Trên Địa Bàn Thành Phố Cần Thơ</small>
      </h1>
@endsection
@section('css')
<style>
  a {
    color: #ffffff !important;
}
</style>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">DANH SÁCH CÁC NHÀ TRỌ</h3>
              
              

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>

                </div>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center ">
                <tr>
                  <th>Mã</th>
                  <th style="text-align: center;">Tên Nt</th>
                  <th style="text-align: center;">Vĩ độ</th>
                  <th style="text-align: center;">Kinh độ</th>
                  <th style="text-align: center;">Mã Loại</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th>Trạng Thái</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('nhatro.create') }}"><i class="fa fa-plus"></i> Thêm Nhà Trọ</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsnhatro as $nhatro)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$nhatro->nt_ma}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_ten}}</td>
                    <td style="text-align: center;">{{$nhatro->nt_vido}}</td>
                    
                    <td style="text-align: center;">{{$nhatro->nt_kinhdo}}</td>
                    <td style="text-align: center;">{{$nhatro->lnt_ma}}</td>
                     @if ($nhatro->nt_trangthai === 1)

                        <td style="text-align: center;"><span class="badge bg-yellow">KHÓA</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



