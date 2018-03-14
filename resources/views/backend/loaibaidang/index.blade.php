@extends('backend.layouts.app')   

@section('title')
  Loại Bài Đăng
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC LOẠI BÀI ĐĂNG
        <small>Các Loại Bài Đăng</small>
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
              <h3 class="box-title">DANH SÁCH CÁC LOẠI BÀI ĐĂNG</h3>
              
              

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
                  <th style="text-align: left;">Tên Loại</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th style="text-align: left;">Trạng Thái</th>
                  <th colspan="2" style="text-align: center;"><button type="button" class="btn btn-info"> <a href="{{ route('loaibaidang.create') }}"><i class="fa fa-plus"></i> Thêm Loại Bài Đăng</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsloaibaidang as $lbd)
        <!-- nhãn từ controller -->
                <tr>
                    <td style="text-align: center;">{{$lbd->lbd_ma}}</td>
                    <td style="text-align: left;">{{$lbd->lbd_ten}}</td>

                    @if ($lbd->lbd_trangthai === 1)

                        <td style="text-align: left;"><span class="badge bg-yellow">KHÓA</span></td>
                    @else
                        <td style="text-align: left;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('loaibaidang.edit', ['loaibaidang' => $lbd->lbd_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('loaibaidang.destroy', ['loaibaidang' => $lbd->lbd_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a></button>
                      </form>
                    </td>
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



