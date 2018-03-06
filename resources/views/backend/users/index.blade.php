@extends('backend.layouts.app')   

@section('title')
  Quản Trị Tài Khoản Người Dùng
@endsection
@section('css')
<style>
  a {
    color: #ffffff !important;
}
</style>
@endsection

@section('page-header')
      <h1>
        DANH SÁCH CÁC USER
        <small>Thông Tin Các User</small>
      </h1>
@endsection



<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">DANH SÁCH CÁC USER</h3>
              
              

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
                @foreach ($dsuser as $user)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$user->id}}</td>
                    <td style="text-align: center;">{{$user->name}}</td>
                    <td style="text-align: center;">{{$user->email}}</td>
                    @if ($user->level === 1)

                        <td style="text-align: center;"><span class="badge bg-yellow">Admin</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Member</span></td>
                    @endif
                    <td>
                      
                      <button type="button" class="btn btn-info"> <a href=" {{ route('user.edit', ['user' => $user->id]) }}" style="color: black" ><i class="fa fa-plug"></i> Cấp Lại Quyền</a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('user.destroy', ['user' => $user->id])}}">
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



