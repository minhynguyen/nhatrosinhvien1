@extends('backend.layouts.app')   

@section('title')
  Bình Luận
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC BÌNH LUẬN
        <small>Bình Luận Bài Đăng</small>
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
              <h3 class="box-title">DANH SÁCH CÁC BÌNH LUẬN</h3>
              
              

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
                  <!-- <th>Mã Tài Khoản</th> -->
                  <th style="text-align: left;">Tên Tài Khoản</th>
                  <th style="text-align: left;">Tiêu Đề Bài Đăng</th>
                  <th style="text-align: left;">Nội Dung Bình Luận</th>
                  <th style="text-align: left;">Ngày Đăng</th>
                  <th style="text-align: center;">Tác Vụ</th>
                  
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsbinhluan as $bl)
        <!-- nhãn từ controller -->
                <tr>
                    <!-- <td style="text-align: center;">{{$bl->id}}</td> -->
                    <td style="text-align: left;">{{$bl->name}}</td>
                    <td style="text-align: left;">{{$bl->bd_tieude}}</td>
                    <td style="text-align: left;">{{$bl->bl_noidung}}</td>
                    <td style="text-align: left;">{{$bl->bl_taomoi}}</td>

                    
                    
                    <td>
                      <form method="POST" action="{{route('binhluanadmin.destroy', ['binhluan' => $bl->bl_noidung])}}">
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



