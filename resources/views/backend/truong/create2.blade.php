@extends('backend.layouts.app')   

@section('title')
  THÊM MỚI TRƯỜNG
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGOpsPtXU8mIHPmnbfelI75eks1-LXcVw&libraries&libraries=places"></script>
  <style>
  #map{
    width: 100%;
    height: 290px;
  }
</style>
@endsection

@section('page-header')
      <h1>
        THÊM MỚI TRƯỜNG
        <small>CÁC CHỦ ĐỀ VÀ LOẠI HOA</small>
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
<form name="frmChude" method="POST" action="{{route('truong.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">THÊM MỚI TRƯỜNG ĐẠI HỌC</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          
          
          <div class="form-group">

            <label for="exampleInputEmail1">Nhập Tên Trường</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_ten" placeholder="Nhập Tên Trường"> -->
            <input type="text" id="searchmap"  class="form-control" placeholder="Vui Lòng Nhập Chính Xác Địa Chỉ Trường" style="width: 100%">
                <hr>
                <div id="map"></div>
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">KINH ĐỘ</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_kinhdo" placeholder="Nhập Kinh Độ"> -->
            <input type="text" class="form-control" name="lng" id="lng" style="width: 100%">

          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">VĨ ĐỘ</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="lat" id="lat" style="width: 100%">
          </div>
         
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="t_trangthai", id="t_trangthai">
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
                  <input type="text" class="form-control pull-right datepicker" id="t_taomoi" name="t_taomoi">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Cập Nhật:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="t_capnhat" name="t_capnhat">
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
<script>
  var map = new google.maps.Map(document.getElementById('map'),{
    center:{
          lat: 10.031450,
          lng: 105.768872
    },
    zoom:16
  });
  var marker = new google.maps.Marker({
    position: {
          lat: 10.031450,
          lng: 105.768872
    },
    map: map,
    draggable: true
  });
  var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
  google.maps.event.addListener(searchBox,'places_changed',function(){
    var places = searchBox.getPlaces();
    var bounds = new google.maps.LatLngBounds();
    var i, place;
    for(i=0; places=places[i];i++){
        bounds.extend(place.geometry.location);
        marker.setPosition(place.geometry.location); //set marker position new...
      }
      map.fitBounds(bounds);
      map.setZoom(16);
  });
  google.maps.event.addListener(marker,'position_changed',function(){
    var lat = marker.getPosition().lat();
    var lng = marker.getPosition().lng();
    $('#lat').val(lat);
    $('#lng').val(lng);
  });
</script>

@endsection



