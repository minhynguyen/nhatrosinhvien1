@extends('backend.layouts.app')   

@section('title')
  THÊM MỚI LOẠI NHÀ TRỌ
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

@endsection

@section('page-header')
      <h1>
        THÊM MỚI LOẠI NHÀ TRỌ
        <small>THÊM MỚI LOẠI NHÀ TRỌ</small>
      </h1>
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
<form name="frmLoainhatro" method="POST" action="{{route('loainhatro.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">THÊM MỚI LOẠI NHÀ TRỌ</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          
          
          <div class="form-group">

            <label for="exampleInputEmail1">Nhập Tên Loại</label>
            <input type="text" class="form-control" id="lnt_ten" name="lnt_ten" placeholder="Nhập Tên Loại Nhà Trọ">
          </div>
          

          
         
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="lnt_trangthai", id="lnt_trangthai">
                  <!-- <select > -->
                    <option value="1">Khóa</option>
                    <option value="2">Khả dụng</option>
                  <!-- </select> -->
                </select>
          </div>
          
          <div class="form-group">
                <label>Tạo Mới:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="lnt_taomoi" name="lnt_taomoi">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Cập Nhật:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="lnt_capnhat" name="lnt_capnhat">
                </div>
                <!-- /.input group -->
              </div>

              

          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">THÊM MỚI</button>
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



