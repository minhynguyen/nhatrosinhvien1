  @extends('backend.layouts.app')   

@section('title')
  Cập Nhật Thông Tin Trường
@endsection


@section('page-header')
      <h1>
        Cập Nhật Thông Tin Trường Học
        <small>Tọa độ các trường đại học</small>
      </h1>
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <style>
  #map{
    width: 100%;
    height: 350px;
  }
</style>
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
        <h3 class="box-title">Cập Nhật Thông Tin Trường</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN TRƯỜNG</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_ten" placeholder="Nhập Tên Trường" value="{{$truong->t_ten}}"> -->
            <input id="pac-input" type="text" name="t_ten" placeholder="Vui Lòng Nhập Chính Xác Địa Chỉ Trường" style="width: 100%" class="form-control" value="{{$truong->t_ten}}">
                <hr>
                 <div id="map"></div>
                 <div id="infowindow-content">
                  <img src="" width="16" height="16" id="place-icon">
                  <span id="place-name"  class="title"></span><br>
                  <span id="place-address"></span>
                </div>
          </div>

          <!-- <div class="form-group">

            <label for="exampleInputEmail1">Kinh Độ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="t_kinhdo" id="lng" placeholder="Nhập Kinh Độ" value="{{$truong->t_kinhdo}}" >
          </div> -->
          <div class="form-group">

            <label for="exampleInputEmail1">KINH ĐỘ</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_kinhdo" placeholder="Nhập Kinh Độ"> -->
            <input type="text" class="form-control" name="t_kinhdo" id="lng" style="width: 100%" value="{{$truong->t_kinhdo}}">

          </div>

          <!-- <div class="form-group">

            <label for="exampleInputEmail1">Vĩ Độ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" id="lat" placeholder="Nhập Vĩ Độ" value="{{$truong->t_vido}}" >
          </div> -->
          <div class="form-group">

            <label for="exampleInputEmail1">VĨ ĐỘ</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="t_vido" id="lat" style="width: 100%" value="{{$truong->t_vido}}">
          </div>

          
          
          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($truong->t_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="t_trangthai", id="t_trangthai">
                    <option value="1" selected="">Khóa</option> 
                    <option value="2">Khả Dụng</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="t_trangthai", id="t_trangthai">
                    <option value="1" >Khóa</option> 
                    <option value="2" selected>Khả Dụng</option>
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
  function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: {{$truong->t_vido}},
                  lng: {{$truong->t_kinhdo}}
                },
          zoom: 17
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
                  position: {
                  lat: {{$truong->t_vido}},
                  lng: {{$truong->t_kinhdo}}
            },
          map: map,
          draggable: true,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        
        google.maps.event.addListener(marker,'position_changed',function(){
          var lat = marker.getPosition().lat();
          var lng = marker.getPosition().lng();
          $('#lat').val(lat);
          $('#lng').val(lng);
        });
      }
      
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries=places" type="text/javascript"></script> -->


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places&callback=initMap"
        async defer></script>
</script>
@endsection




