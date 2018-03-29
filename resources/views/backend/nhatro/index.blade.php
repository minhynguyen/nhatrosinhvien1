@extends('backend.layouts.app')   

@section('title')
  Nhà Trọ
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC NHÀ TRỌ
        <small>Thông Tin Các Nhà Trọ</small>
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
                  <th style="text-align: left;">Tên Nhà Trọ</th>
                  <th style="text-align: left;">Địa Chỉ</th>
                  <th style="text-align: left;">Vĩ độ</th>
                  <th style="text-align: left;">Kinh độ</th>
                  <th style="text-align: left;">Loại Nhà Trọ</th>
                  <th style="text-align: left;">Diện Tích</th>
                  <th style="text-align: left;">Giá Điện</th>
                  <th style="text-align: left;">Giá Nước</th>
                  <th style="text-align: left;">Giá Thuê</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th >Trạng Thái</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('nhatro.create') }}"><i class="fa fa-plus"></i> Thêm Nhà Trọ</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsnhatro as $nhatro)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$nhatro->nt_ma}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_ten}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_diachi}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_vido}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_kinhdo}}</td>
                    <td style="text-align: left;">{{$nhatro->lnt_ten}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_dientich}}</td>
                     
                    <td style="text-align: left;">{{$nhatro->nt_giadien}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_gianuoc}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_giathue}}</td>
                    @if ($nhatro->nt_trangthai === 1)

                        <td style="text-align: center;"><span class="badge bg-green">Đã Duyệt</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Chờ Duyệt</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('nhatro.edit', ['nhatro' => $nhatro->nt_ma]) }}" ><i class="fa fa-edit"></i> </a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('nhatro.destroy', ['nhatro' => $nhatro->nt_ma])}}">
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



