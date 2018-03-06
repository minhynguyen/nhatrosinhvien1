@extends('backend.layouts.app')   

@section('title')
  THÊM MỚI TIỆN ÍCH NHÀ TRỌ
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

@endsection

@section('page-header')
      <h1>
          THÊM MỚI TIỆN ÍCH NHÀ TRỌ        
          <small>THÊM MỚI TIỆN ÍCH NHÀ TRỌ</small>
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
<form name="frmtienich" method="POST" action="{{route('tienich.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">THÊM MỚI TIỆN ÍCH NHÀ TRỌ</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          
          
          <div class="form-group">

            <label for="exampleInputEmail1">Nhập Tên Tiện Ích</label>
            <input type="text" class="form-control" id="ti_ten" name="ti_ten" placeholder="Nhập Tên Tiện Ích Nhà Trọ">
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">Nhập Diễn Giải Tiện Ích</label>
            <input type="text" class="form-control" id="ti_diengiai" name="ti_diengiai" placeholder="Nhập Tên Tiện Ích Nhà Trọ">
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



