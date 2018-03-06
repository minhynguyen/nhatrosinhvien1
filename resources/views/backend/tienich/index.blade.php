@extends('backend.layouts.app')   

@section('title')
  Tiện Ích Nhà Trọ
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC TIỆN ÍCH NHÀ TRỌ
        <small>Tiện Ích Nhà Trọ</small>
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
              <h3 class="box-title">DANH SÁCH CÁC TIỆN ÍCH NHÀ TRỌ</h3>
              
              

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
                  <th style="text-align: center;">Tên Tiện Ích</th>
                  <th style="text-align: center;">Diễn Giải</th>
                  <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('tienich.create') }}"><i class="fa fa-plus"></i> Thêm Tiện Ích</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dstienich as $ti)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$ti->ti_ma}}</td>
                    <td style="text-align: center;">{{$ti->ti_ten}}</td>
                    <td>{{$ti->ti_diengiai}}</td>
                    <td>{{$ti->ti_taomoi}}</td>
                    <td>{{$ti->ti_capnhat}}</td>
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('tienich.edit', ['tienich' => $ti->ti_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('tienich.destroy', ['tienich' => $ti->ti_ma])}}">
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


