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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
            type="text/javascript"></script>
            
      </head>
     

        <body>
            <style>
                #map{
                    width: 100%;
                    height: 100%;
                }
            </style>

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html" style="margin-left: -100px; padding-top: 20px">NhàTrọSinhViên</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav main-nav  clear navbar-right">
                                <li>
                                    <select class="form">
                                      <option value="" disabled selected>Chọn Loại Nhà Trọ</option>
                                      <option>Nhà trọ độc lập</option>
                                      <option>Khu Nhà Trọ</option>
                                      <option>Ở Cùng Chủ Nhà</option>
                                      
                                    </select>
                                </li>
                                <li>
                                    <select class="form">
                                      <option value="" disabled selected>Chọn Mức Giá</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      
                                    </select>
                                </li>
                                <li>
                                    <select class="form" >
                                      <option value="" disabled selected>Chọn Trường Học</option>
                                      <option>Đại Học Cần Thơ</option>
                                      <option>Đại Học Cần Thơ</option>
                                      <option>Đại Học Cần Thơ</option>
                                      
                                    </select>
                                </li>
                                <li>
                                    <select class="form" >
                                      <option value="" disabled selected>Diện Tích</option>
                                      <option>Trên 10m2</option>
                                      <option>Trên 10m2</option>
                                      <option>Trên 10m2</option>
                                      <option>Trên 10m2</option>
                                      
                                    </select>
                                </li>
                                <li>
                                    <select class="form" >
                                      <option value="" disabled selected>Chọn Số Lượng Khách</option>
                                      <option>Nhóm 1 đến 4 Khách</option>
                                      <option>Nhóm 5 đến 10 Khách</option>
                                      <option>Nhóm 10 đến 30 Khách</option>
                                      <option>Trên 30 Khách</option>
                                    </select>
                                </li>
                                <li>
                                    <a class="color_animation" href="">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a class="color_animation" href="" style="margin-left: 2px!important"> | Đăng Kí</a>
                                </li>
                            </ul>
                      
                            
                        </div><!-- /.navbar-collapse -->
                    </div>

                </div><!-- /.container-fluid -->
                
                
                

            </nav>



            <div id="map"></div>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.min.js') }}"> </script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/bootstrap.min.js') }}" ></script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.js') }}"></script>     
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery.mixitup.min.js') }}" ></script>
            <script src="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script>
  $(function(){
    // chấm là class # là id
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })

    $('.timepicker').timepicker({
    showInputs: false
    })
  });
  
  
</script>
<script>
  var map, marker;
  var mapDiv = document.getElementById('map');
  var myLatLng = {lat: 10.0309641000, lng: 105.7689041000};
  function initMap() {
        map = new google.maps.Map(mapDiv, {
          center: myLatLng,
          zoom: 14,
          zoomControl: false,
          streetViewControl: false,
          scrolwheel : true,
        });
        marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!',
          draggable: true,
          // icon: 'http://maps.google.com/mapfiles/ms/micons/green.png'
        });
       google.maps.event.addListener(marker,'position_changed',function(){

    var lat = marker.getPosition().lat();
    var lng = marker.getPosition().lng();

    $('#lat').val(lat);
    $('#lng').val(lng);
    
    // console.log(lat, lng);

  });

 
  // var marker2 = new google.maps.Marker({
  //   position:{
  //     lat:10.015686,
  //     lng:105.764305
  //   },
  //   map:map,

  //   icon: 'http://maps.google.com/mapfiles/ms/micons/green.png'
    
  // });
  // var marker3 = new google.maps.Marker({
  //   position:{
  //     lat:10.035031,
  //     lng:105.753593
  //   },
  //   map:map,

  //   icon: 'http://maps.google.com/mapfiles/ms/micons/green.png'
    
  // });
  
  
  var customMapType = new google.maps.StyledMapType([
          {stylers: [{hue: '#D2E4C8'}]},
          {
                featureType: 'water',
                stylers: [{color: '#599459'}]
              },
              // {
              //   featureType: 'road',
              //   elementType: 'geometry',
              //   stylers: [{color: '#f5f1e6'}]
              // },
              // {
              //   featureType: 'road.arterial',
              //   elementType: 'geometry',
              //   stylers: [{color: '#fdfcf8'}]
              // },

        ]);
  var customMapTypeId ='custom_style'
        map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);
        geolocate();
      };
  function GeolocationControl(){
  var geoButton = document.getElementById('curent-location');
  google.maps.event.addListener(geoButton, 'click', geolocate); 
};
function geolocate(){
  if (navigator.geolocation) { //nếu trình duyệt lấy đc vị trí
          navigator.geolocation.getCurrentPosition(function(position) {

            console.log(position);
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
      initMap();
      GeolocationControl();
</script>



        </body>
    </html>