@extends('backend.layouts.app')   

@section('title')
  Cập Nhật Thông Tin Trường
@endsection


@section('page-header')
      <h1>
        Cập Nhật Thông Tin Trường Học
        <small>CÁC CHỦ ĐỀ VÀ LOẠI HOA</small>
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
<form name="frmTruong" method="POST" action="{{route('truong.update', ['truong'=> $truong->t_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SỬA </h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN Trường</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="t_ten" placeholder="Nhập Tên Trường" value="{{$truong->t_ten}}">
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">Kinh Độ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="t_kinhdo" placeholder="Nhập Kinh Độ" value="{{$truong->t_kinhdo}}">
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">Vĩ Độ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ" value="{{$truong->t_vido}}">
          </div>
          
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="t_trangthai", id="t_trangthai">
                    <option value="1">Khóa</option> 
                    <option value="2">Khả dụng</option>
                </select>

          </div>
          
          

          <div class="form-group">
                <label>Tạo Mới:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="t_taomoi" name="t_taomoi" value="{{$truong->t_taomoi}}">
                </div>
              </div>
              <div class="form-group">
                <label>Cập Nhật:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="t_capnhat" name="t_capnhat" value="{{$truong->t_capnhat}}">
                </div>
                <!-- /.input group -->
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
@section('script')
<script src=" {{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script>
  $(function(){
    // chấm là class # là id
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
  });
</script>
@endsection




