@extends('backend.layouts.app')   

@section('title')
  Quản Trị Tài Khoản Người Dùng
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC ADMIN
        <small>Thông Tin Tài Khoản Các Admin</small>
      </h1>
@endsection



<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">DANH SÁCH CÁC ADMIN</h3>
              
              

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

                  <th style="text-align: center;">Tên Người Dùng</th>
                  <th style="text-align: center;">Email</th>
                  <th>Loại Tài Khoản</th>
                  <th colspan="2">Tác Vụ</th>
                  
                </tr>
                @foreach ($dsadmin as $admin)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$admin->id}}</td>
                    <td style="text-align: center;">{{$admin->name}}</td>
                    <td style="text-align: center;">{{$admin->email}}</td>
                    
                    <td style="text-align: center;"><span class="badge bg-yellow">Admin</span></td>
                    
                    <td>
                      
                      <button type="button" class="btn btn-info"> <a href=" {{ route('user.edit', ['admin' => $admin->id]) }}" style="color: black" ><i class="fa fa-plug"></i> Cấp Lại Quyền</a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('user.destroy', ['admin' => $admin->id])}}">
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



