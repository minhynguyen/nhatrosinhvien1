  @extends('backend.layouts.app')   

@section('title')
  Cập Nhật Thông Tin Nhà Trọ
@endsection


@section('page-header')
      <h1>
        Cập Nhật Thông Tin Nhà Trọ
        <small></small>
      </h1>
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="{{url('css/dropzone.css')}}">
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
<form name="frmTruong" method="POST" action="{{route('nhatro.update', ['nhatro'=> $nhatro->nt_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cập Nhật Thông Tin Nhà Trọ</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">Tên Nhà Trọ</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="nt_ten" value="{{$nhatro->nt_ten}}" id="" style="width: 100%">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Loại</label>
            <select name="lnt_ma" id="lnt_ma" class="form-control">
              @foreach($dsloainhatro as $lnt)
              <!-- <option value="{{$lnt->lnt_ma}}">{{$lnt->lnt_ten}}</option> -->
              <option value="{{$lnt->lnt_ma}}" <?php echo ($lnt->lnt_ma == $nhatro->lnt_ma) ? 'selected' : ''  ?>>{{$lnt->lnt_ten}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">SĐT</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="nt_sdtlienhe" value="{{$nhatro->nt_sdtlienhe}}" id="" style="width: 100%">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Địa Chỉ Nhà Trọ</label>
            <input id="pac-input" type="text" name="nt_diachi" placeholder="Vui Lòng Nhập Chính Xác Địa Chỉ Nhà Trọ" style="width: 100%" class="form-control" value="{{$nhatro->nt_diachi}}">
                <hr>
                 <div id="map"></div>
                 <div id="infowindow-content">
                  <img src="" width="16" height="16" id="place-icon">
                  <span id="place-name"  class="title"></span><br>
                  <span id="place-address"></span>
                </div>
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">KINH ĐỘ</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_kinhdo" placeholder="Nhập Kinh Độ"> -->
            <input type="text" class="form-control" name="nt_kinhdo" id="lng" style="width: 100%" value="{{$nhatro->nt_kinhdo}}">

          </div>


          <div class="form-group">

            <label for="exampleInputEmail1">VĨ ĐỘ</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="nt_vido" id="lat" style="width: 100%" value="{{$nhatro->nt_vido}}">
          </div>

          <div class="form-group">

            <label for="exampleInputEmail1">Diện Tích</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_kinhdo" placeholder="Nhập Kinh Độ"> -->
            <input type="text" class="form-control" name="nt_dientich"  style="width: 100%" value="{{$nhatro->nt_dientich}}">

          </div>

          
          
          
          <div class="form-group">

            <label for="exampleInputEmail1">Giá Thuê</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="nt_giathue" value="{{$nhatro->nt_giathue}}" id="" style="width: 100%">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Giá Điện</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="nt_giadien" value="{{$nhatro->nt_giadien}}" id="" style="width: 100%">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Giá Nước</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="t_vido" placeholder="Nhập Vĩ Độ"> -->
            <input type="text" class="form-control" name="nt_gianuoc" value="{{$nhatro->nt_gianuoc}}" id="" style="width: 100%">
          </div>
          

          <div class="form-group">
                <label>Trạng Thái</label>
                @if ($nhatro->nt_trangthai === 1)
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="nt_trangthai", id="nt_trangthai">
                    <option value="1" selected="">Đã Duyệt</option> 
                    <option value="2">Chờ Duyệt</option>
                </select>
                @else
                <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="nt_trangthai", id="nt_trangthai">
                    <option value="1" >Đã Duyệt</option> 
                    <option value="2" selected>Chờ Duyệt</option>
                </select>
                @endif

          </div>
          
          <!-- <div class="form-group">
            <div class="fa fa-cogs fa-2x" > Tiện ích phòng trọ</div>
            <div class="col-md-12">
              <div class="checkbox">
                @foreach($dstienich as $ti)
                
                <label><input name="tienich[]" id="tienich" type="checkbox" value="{{$ti->ti_ma}}">{{$ti->ti_ten}}</label>
                @endforeach  
              </div>
              </div>
          </div> -->

          <!-- <div class="form-group">
              <div id="filediv">
                <input type="file" id="file" name="images[]" multiple="multiple" accept="image/*" title="Select Images To Be Uploaded">
                <br>
          </div>

          </div> -->
          
          

          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
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
  $('#add_more').click(function() {
      "use strict";
      $(this).before($("<div/>", {
        id: 'filediv'
      }).fadeIn('slow').append(
        $("<input/>", {
          name: 'file[]',
          type: 'file',
          id: 'file',
          multiple: 'multiple',
          accept: 'image/*'
        })
      ));
    });

    $('#upload').click(function(e) {
      "use strict";
      e.preventDefault();

      if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
        alert("No files are selected.");
        return false;
      }

      // Now, upload the files below...
      // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
    });

    function deletePreview(ele, i) {
      "use strict";
      try {
        $(ele).parent().remove();
        window.filesToUpload.splice(i, 1);
      } catch (e) {
        console.log(e.message);
      }
    }

    $("#file").on('change', function() {
      "use strict";

      // create an empty array for the files to reside.
      window.filesToUpload = [];

      if (this.files.length >= 1) {
        $("[id^=previewImg]").remove();
        $.each(this.files, function(i, img) {
          var reader = new FileReader(),
            newElement = $("<div id='previewImg" + i + "' class='abcd'><img /></div>"),
            deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>delete</span>").prependTo(newElement),
            preview = newElement.find("img");

          reader.onloadend = function() {
            preview.attr("src", reader.result);
            preview.attr("alt", img.name);
          };

          try {
            window.filesToUpload.push(document.getElementById("file").files[i]);
          } catch (e) {
            console.log(e.message);
          }

          if (img) {
            reader.readAsDataURL(img);
          } else {
            preview.src = "";
          }

          newElement.appendTo("#filediv");
        });
      }
    });
</script>
<script>
  function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: {{$nhatro->nt_vido}},
                  lng: {{$nhatro->nt_kinhdo}}
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
                  lat: {{$nhatro->nt_vido}},
                  lng: {{$nhatro->nt_kinhdo}}
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




