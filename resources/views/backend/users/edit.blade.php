  @extends('backend.layouts.app')   

@section('title')
  Cấp Quyền Người Dùng
@endsection


@section('page-header')
      <h1>
        Cấp Quyền Người Dùng
        <small>Cấp Quyền Người Dùng</small>
      </h1>
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

@endsection

@section('content')
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      <!-- hàm validate trong lar hỗ trợ biến errors -->
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
<form name="frmUser" method="POST" action="{{route('user.update', ['user'=> $user->id]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cấp Quyền Người Dùng</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          

          <div class="form-group">

            <label for="exampleInputEmail1">Tên</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" id="lng" placeholder="Nhập Kinh Độ" value="{{$user->name}}" >
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Email</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_kinhdo" placeholder="Nhập Kinh Độ"> -->
            <input type="email" class="form-control" name="email" id="lng" style="width: 100%" value="{{$user->email}}">

          </div>
          <div class="form-group">
                <label>Loại Tài Khoản</label>
                @if ($user->level === 1)
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="level", id="cd_trangthai">
                    <option value="1" selected="">Admin</option> 
                    <option value="0">Member</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="level", id="cd_trangthai">
                    <option value="1" >Admin</option> 
                    <option value="0" selected>Member</option>
                </select>
                @endif
          </div>

          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">SỬA</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection





