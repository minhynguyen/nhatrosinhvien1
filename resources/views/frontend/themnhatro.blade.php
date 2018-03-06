    <!DOCTYPE html>
    <html>

         <head>
            <meta charset="UTF-8">
            <title>Nhà Trọ Sinh Viên</title>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/style-portfolio.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/picto-foundry-food.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/jquery-ui.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="{{ asset ('theme/homepage/css/font-awesome.min.css') }}" rel="stylesheet">
            <link rel="icon" href="{{ asset ('theme/homepage/image/icon.ico') }}" type="image/x-icon">
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places&callback=initMap"
        async defer></script> -->
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
            type="text/javascript"></script> -->
  <style>
  #map{
    width: 100%;
    height: 290px;
    
  }
</style>
            
      </head>
     

        <body>

           
             <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                       <div class="navbar-header">
                            <a class="navbar-brand" href="index.html" style="margin-left: -50px; padding-top: 20px">NhàTrọSinhViên</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!-- <ul class="nav navbar-nav main-nav  clear navbar-right ">
                                <li style="padding-right: 30px"><a class="color_animation" href="#">ĐĂNG TIN CHO THUÊ</a></li>
                                <li style="padding-right: 30px"> <a class="color_animation" href="#">QUẢN LÝ TÀI KHOẢN</a></li>
                                <li style="padding-right: 30px"><a class="color_animation" href="#">QUẢN LÝ ĐẶT PHÒNG</a></li>
                                <li style="padding-right: 30px"><a class="color_animation" href="#">KHÔNG GIAN</a></li>
                                
                            </ul> -->
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
            

            <div class="description_content">
                <div class="text-content container">
                    <div class="col-md-6">
                        <h1 style="font-family: Time new romance">Đăng Kí Nhà Trọ</h1>
                        <div class="fa fa-tasks fa-2x"></div>
              
                        <div class="col-md-6" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Chọn Loại Bài Đăng"> -->
                            <select class="form" style="width: 100%">
                                      <option value="" disabled selected>Chọn Loại Nhà Trọ</option>
                                      @foreach($dsloainhatro as $lnt)
                                        <option value="{{$lnt->lnt_ma}}">{{$lnt->lnt_ten}}</option>
                                      @endforeach      
                            </select>
                        </div>

                        <div class="col-md-6" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Chọn Loại Phòng"> -->
                            <select class="form" style="width: 100%">
                                      <option value="" disabled selected>Chọn Loại Phòng</option>
                                      <option>CHO THUÊ</option>
                                      <option>Ở GHÉP</option>      
                            </select>
                        </div>
                        

                        <div class="col-md-12" style="margin-top: 10px">
                          <div class="fa fa-home fa-2x"> Thông Tin Nhà Trọ</div>
                            <input type="text" name="" class="form" style="width: 100%" placeholder="Tên Nhà Trọ">
                        </div>

                        <!-- <div class="col-md-6" style="margin-top: 10px">
                            <input type="text" name="" class="form" style="width: 100%" placeholder="Tên Người Cho Thuê">
                        </div>

                        <div class="col-md-6" style="margin-top: 10px">
                            <input type="text" name="" class="form" style="width: 100%" placeholder="Số Điện Thoại Liên Lạc">
                        </div> -->
                        
                        <div class="col-md-6" style="margin-top: 10px">
                            <div class="input-group" class="form">
                              <input type="text" class="form" name="msg" placeholder="Giá Cho Thuê" >
                              <span class="input-group-addon">/Tháng</span>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top: 10px">
                            <div class="input-group" class="form">
                              <input type="text" class="form" name="msg" placeholder="Diện Tích Phòng" >
                              <span class="input-group-addon">(~ M<sup>2</sup>).</span>
                            </div>
                        </div>


                        <div class="col-md-12" style="margin-top: 10px">
                          <div class="fa fa-cogs fa-2x" > Địa Chỉ Cụ Thể</div>
                          
                              <!-- <label for="">ĐIỂM CẦN THÊM:</label> -->
                              <!-- <input type="text" id="searchmap"  class="form" placeholder="Nhập Địa Chỉ Chính Xác Nhà Trọ" style="width: 100%"> -->
                              <!-- <hr> -->
                              <!-- <div id="map-canvas"></div> -->
                              <input id="pac-input" type="text" name="t_ten" placeholder="Vui Lòng Nhập Chính Xác Địa Chỉ Nhà Trọ" style="width: 100%" class="form">
                
                 <!-- <div id="map"></div> -->
                 <div id="infowindow-content">
                  <img src="" width="16" height="16" id="place-icon">
                  <span id="place-name"  class="title"></span><br>
                  <span id="place-address"></span>
                </div>
                              
                          
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                          
                            <label for="">VĨ ĐỘ (LATITUDE)</label>
                            <input type="text" class="form" name="lat" id="lat" style="width: 100%">
                          
                        </div>
                        <div class="col-md-6" style="margin-top: 10px"> 
                          
                            <label for="">KINH ĐỘ (LONGITUDE)</label>
                            <input type="text" class="form" name="lng" id="lng" style="width: 100%">
                          
                        </div>


                        <div class="col-md-12" style="margin-top: 10px">
                          <div class="fa fa-cogs fa-2x" > Tiện ích phòng trọ</div>
                          <div class="col-md-12">
                            <div class="checkbox">
                              @foreach($dstienich as $ti)
                              <!-- <option value="{{$ti->ti_ma}}">{{$ti->ti_ten}}</option> -->
                              <label><input type="checkbox" value="{{$ti->ti_ma}}">{{$ti->ti_ten}}</label>
                              @endforeach
                              
                            </div>
                            </div>
                        </div>


                        <div class="col-md-12" style="margin-top: 10px">
                          <div class="fa fa-cubes fa-2x" > Thông Tin Bổ Sung</div>
                          <div class="col-md-6" style="margin-top: 10px">
                            <div class="input-group" class="form">
                              <input type="text" class="form" name="msg" placeholder="Giá Điện" >
                              <span class="input-group-addon">(~ Kw/h)</span>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top: 10px">
                            <div class="input-group" class="form">
                              <input type="text" class="form" name="msg" placeholder="Giá Nước" >
                              <span class="input-group-addon">(~ M<sup>3</sup>).</span>
                            </div>
                        </div>

                        <!-- <div class="col-md-6" style="margin-top: 10px">
                            <select class="form" style="width: 100%">
                                      <option value="" disabled selected>Vệ Sinh</option>
                                      <option value="">Khép Kín</option>
                                      <option value="">Chung</option>      
                            </select>
                        </div> -->
                        <!-- <div class="col-md-6" style="margin-top: 10px">
                            <select class="form" style="width: 100%">
                                      <option value="" disabled selected>Camera An Ninh</option>
                                      <option value="">Có</option>
                                      <option value="">Không</option>      
                            </select>
                        </div> -->

                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            
                        </div>
                        

                        
                    </div>
                    <div class="col-md-6">
                        <div class="img-section">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <div class="img-section-space"></div>
                           <img src="{{ asset ('theme/homepage/image/pic3.jpg' )}}"  width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic4.jpg' )}}"  width="250" height="220">
                       </div>
                    </div>
                    <div class="col-md-6" style="margin-top: 10px">
                      <label>Kéo thả vị trí trên bản đồ để chỉnh địa điểm chính xác hơn</label>
                        <div id="map"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="fa fa-file-photo-o fa-2x" > Hình Ảnh Nhà Trọ</div>
                        <div style="max-width: 650px; margin: auto;">
                        <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
                          <div id="image-preview-div" style="display: none">
                            <label for="exampleInputFile">Ảnh Đã Chọn</label>
                            <br>
                            <img id="preview-img" src="">
                          </div>
                          <div class="form-group">
                            <input type="file" name="file" id="file" required>
                          </div>
                        </form>
                      </div>

                     


                    </div>


                    <div class="col-md-12">
                        <div class="fa fa-puzzle-piece fa-2x" > Thông Tin Mô Tả Thêm</div>
                        <textarea id="editor1" name="editor1" rows="10" cols="80" style="width: 100%">
                    </textarea>
                    </div>

                    <div class="col-md-12" style="margin-top: 10px">
                            <button type="submit" id="submit" name="submit" class="text-center form-btn" style="width: 100%; background-color: #50a900"><li class="fa fa-paper-plane"> </li> Đăng Tin</button>
                    </div>

                    


                </div>
            </div>
            <footer class="sub_footer" style="margin-top: 25px">
                <div class="container">
                    <div class="social_heading" style="font-family: time new romance; margin-top: 5px">Hệ Thống Quản Lý Nhà Trọ Sinh Viên</div>
                </div>
            </footer>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.min.js') }}"> </script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/bootstrap.min.js') }}" ></script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.js') }}"></script>     
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery.mixitup.min.js') }}" ></script>
            <script src="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/upload-image.js') }}"></script>
            <script src="{{ asset ('theme/homepage/ckeditor/ckeditor.js') }}"></script>
            <script>CKEDITOR.replace('editor1');</script>
            <script>
 function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 10.031450, lng: 105.768872},
          zoom: 15,
          scrollwheel: true
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
                  lat: 10.031450,
                  lng: 105.768872
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
            
            window.alert("Không Tìm Thấy Vị Trí: '" + place.name + "'");
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
        function GeolocationControl(){
                var geoButton = document.getElementById('curent-location');
                google.maps.event.addListener(geoButton, 'click', geolocate); 
              };
              function geolocate(){
                if (navigator.geolocation) { //nếu trình duyệt lấy đc vị trí
                        navigator.geolocation.getCurrentPosition(function(position) {

                          // console.log(position);
                          var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                          };


                          map.setCenter(pos);
                          marker.setPosition(pos);
                        });
                      }else{
                        alert('use location');
                      }
                };
                geolocate();
      }
      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places&callback=initMap"
        async defer></script>
    
  </body>
</html>