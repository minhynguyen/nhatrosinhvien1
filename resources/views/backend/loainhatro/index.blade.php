@extends('backend.layouts.app')   

@section('title')
  Loại Nhà Trọ
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC LOẠI NHÀ TRỌ
        <small>Các Loại Nhà Trọ</small>
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
              <h3 class="box-title">DANH SÁCH CÁC LOẠI NHÀ TRỌ</h3>
              
              

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
                  <th style="text-align: center;">Tên Loại</th>
                  <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('loainhatro.create') }}"><i class="fa fa-plus"></i> Thêm Loại Nhà Trọ</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsloainhatro as $lnt)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$lnt->lnt_ma}}</td>
                    <td style="text-align: left;">{{$lnt->lnt_ten}}</td>
                    <td>{{$lnt->lnt_taomoi}}</td>
                    <td>{{$lnt->lnt_capnhat}}</td>
                    <td>{{$lnt->lnt_trangthai}}</td>
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('loainhatro.edit', ['loainhatro' => $lnt->lnt_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('loainhatro.destroy', ['loainhatro' => $lnt->lnt_ma])}}">
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



