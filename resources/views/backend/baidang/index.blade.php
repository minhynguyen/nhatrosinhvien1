@extends('backend.layouts.app')   

@section('title')
  Bài Đăng
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC BÀI ĐĂNG
        <small>Thông Tin Các Bài Đăng</small>
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
              <h3 class="box-title">DANH SÁCH CÁC BÀI ĐĂNG</h3>
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
                  <th style="text-align: left;">Tên Người Đăng</th>
                  <th style="text-align: left;">Tên Nhà Trọ</th>
                  <th style="text-align: left;">Loại Bài Đăng</th>
                  <th style="text-align: left;">Tiêu Đề</th>
                  <th style="text-align: left;">Nội Dung</th>
                  <th >Trạng Thái</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('baidang.create') }}"><i class="fa fa-plus"></i> Thêm Bài Đăng</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsbaidang as $baidang)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$baidang->bd_ma}}</td>
                    <td style="text-align: left;">{{$baidang->name}}</td>
                    <td style="text-align: left;">{{$baidang->nt_ten}}</td>
                    <td style="text-align: left;">{{$baidang->lbd_ten}}</td>
                    <td style="text-align: left;">{{$baidang->bd_tieude}}</td>
                    <td style="text-align: left;">{{$baidang->bd_noidung}}</td>
                    
                    @if ($baidang->bd_trangthai === 2)

                        <td style="text-align: center;"><span class="badge bg-yellow">Chờ Duyệt</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Đã Duyệt</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('baidang.edit', ['baidang' => $baidang->bd_ma]) }}" ><i class="fa fa-edit"></i> </a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('baidang.destroy', ['baidang' => $baidang->bd_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></a></button>
                      </form>
                    </td>
                    
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



