  @extends('backend.layouts.app')   

@section('title')
  Cập Nhật Thông Tin Tiện Ích Nhà Trọ
@endsection


@section('page-header')
      <h1>
        Cập Nhật Thông Tin Tiện Ích Nhà Trọ
        <small>Cập Nhật Thông Tin Tiện Ích Nhà Trọ</small>
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
<form name="frmLoainhatro" method="POST" action="{{route('tienich.update', ['tienich'=> $tienich->ti_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cập Nhật Thông Tin Loại Nhà Trọ</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">Tên Loại</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ti_ten" placeholder="Nhập Tên Trường" value="{{$tienich->ti_ten}}">
            
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Diễn Giải</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ti_diengiai" placeholder="Nhập " value="{{$tienich->ti_diengiai}}">
            
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




