@extends('backend.layouts.app')   

@section('title')
  Danh sach cac trường
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC TRƯỜNG
        <small>DANH SÁCH CÁC TRƯỜNG</small>
      </h1>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">DANH SÁCH CÁC TRƯỜNG</h3>
              
              

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
                  <th style="text-align: left">Tên</th>
                  <th style="text-align: left">Vĩ độ</th>
                  <th style="text-align: left">Kinh độ</th>
                  <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <!-- <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('truong.create') }}"><i class="fa fa-plus"></i> Thêm Chủ Đề</button></a></th> -->
                  <!-- <th></th> -->
                </tr>
                @foreach ($dstruong as $dstruong)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$dstruong->t_ma}}</td>
                    <td style="text-align: left;">{{$dstruong->t_ten}}</td>
                    <td style="text-align: left;">{{$dstruong->t_vido}}</td>
                    <td style="text-align: left;">{{$dstruong->t_kinhdo}}</td>
                    <td>{{$dstruong->t_taomoi}}</td>
                    <td>{{$dstruong->t_capnhat}}</td>
                    <td>{{$dstruong->t_trangthai}}</td>
                   <!--  <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('chude.edit', ['chude' => $cd->cd_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    
                      
                    </td> -->
                   <!--  <td>
                      <form method="POST" action="{{route('chude.destroy', ['chude' => $cd->cd_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a></button>
                      </form>
                    </td> -->
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



