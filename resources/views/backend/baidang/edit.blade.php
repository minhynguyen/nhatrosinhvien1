@extends('backend.layouts.app')   

@section('title')
  THÊM MỚI BÀI ĐĂNG
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

@endsection

@section('page-header')
      <h1>
        CHỈNH SỬA BÀI ĐĂNG
        <small>CHỈNH SỬA BÀI ĐĂNG</small>
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
<form name="frmbaidang" method="POST" action="{{route('baidang.update', ['baidang'=> $baidang->bd_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">CHỈNH SỬA BÀI ĐĂNG</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">

         

          

          <div class="form-group">
                <label>Loại Bài Đăng</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="lbd_ma", id="lbd_ma">
                  @foreach($dsloaibaidang as $lbd)
                    <option value="{{$lbd->lbd_ma}}" <?php echo ($lbd->lbd_ma == $baidang->lbd_ma) ? 'selected' : ''  ?>>{{$lbd->lbd_ten}}</option>
                  @endforeach
                </select>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Nhập Tiêu Đề</label>
            <input type="text" class="form-control" id="bd_tieude" name="bd_tieude" placeholder="Nhập Tiêu Đề" value="{{$baidang->bd_tieude}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nhập Nội Dung</label>
            <input type="text" class="form-control" id="bd_noidung" name="bd_noidung" placeholder="Nhập Nội Dung" value="{{$baidang->bd_noidung}}">
          </div>
          

          
         
          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($baidang->bd_trangthai === 2)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="bd_trangthai", id="bd_trangthai">
                    <option value="2" selected="">Chờ Duyệt</option> 
                    <option value="1">Đã Duyệt</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="bd_trangthai", id="bd_trangthai">
                    <option value="2" >Chờ Duyệt</option> 
                    <option value="1" selected>Đã Duyệt</option>
                </select>
                @endif

          </div>
          
    

              

          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Sửa</button>
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



