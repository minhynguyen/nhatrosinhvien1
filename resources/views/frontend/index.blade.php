    <!DOCTYPE html>
    <html>

        <head>
            <meta charset="UTF-8">
            <title>Nhà Trọ Sinh Viên</title>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <!-- <link rel="stylesheet" href="{{ asset ('js/jqueryMap.js') }}"> -->
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places&callback=initMap"
        async defer></script> -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
            type="text/javascript"></script>
            
      </head>
     

        <body>
            <style>
                #map{
                    width: 100%;
                    height: 100%;
                }
                #map img {
                  max-width: none !important;
                }

                .gm-style-iw {
                  width: 350px !important;
                  top: 15px !important;
                  /*padding-right: 0px !important;*/
                  /*bottom: : 0px !important;*/
                  /*right: 0px !important;*/
                  left: 0px !important;
                  background-color: #fff;
                  box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
                  border: 1px solid rgba(72, 181, 233, 0.6);
                  border-radius: 2px 2px 10px 10px;
                }
                #iw-container {
                  margin-bottom: 10px;
                }
                #iw-container .iw-title {
                  font-family: 'Time New Romance', sans-serif;
                  font-size: 22px;
                  font-weight: 400;
                  padding: 10px;
                  background-color: #48b5e9;
                  color: white;
                  margin: 0;
                  border-radius: 2px 2px 0 0;
                }
                #iw-container .iw-content {
                  font-size: 15px;
                  line-height: 18px;
                  font-weight: 400;
                  margin-right: 1px;
                  padding: 15px 5px 20px 15px;
                  max-height: 140px;
                  overflow-y: auto;
                  overflow-x: hidden;
                }
                .iw-content img {
                  float: right;
                  margin: 0 5px 5px 10px; 
                }
                .iw-subTitle {
                  font-size: 16px;
                  font-weight: 700;
                  padding: 5px 0;
                }
                .iw-bottom-gradient {
                  position: absolute;
                  width: 326px;
                  height: 25px;
                  bottom: 10px;
                  right: 18px;
                  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
                  background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
                  background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
                  background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
                }
            </style>

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ route('index')}}" style="margin-left: -100px; padding-top: 20px">NhàTrọSinhViên</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav main-nav  clear navbar-right">
                                <li>
                                    <select class="form" id="cmbLoaiNhaTro">
                                      <option value="0" disabled selected>Chọn Loại Nhà Trọ</option>
                                      <option value="0">ALL</option>
                                        @foreach($dsloainhatro as $lnt)
                                        <option value="{{$lnt->lnt_ma}}">{{$lnt->lnt_ten}}</option>
                                        @endforeach
                                      
                                    </select>


                                </li>
                              <?php 
                                  $dsGiaTu = [];
                                  for($i=200000; $i<=2200000; $i+= 200000){
                                      array_push($dsGiaTu, $i);
                                  }
                               ?>
                               <?php 
                                  $dsGiaDen = [];
                                  for($i=200000; $i<=2200000; $i+= 200000){
                                      array_push($dsGiaDen, $i);
                                  }
                               ?>
                                <li>
                                    <select class="form" id="cmbGiaTu">
                                      <option value="0" disabled selected>Chọn Mức Giá Từ</option>
                                      <option value="0">ALL</option>
                                      @foreach($dsGiaTu as $giatu)
                                        <option value="{{$giatu}}">{{number_format($giatu)}}</option>
                                      @endforeach
                                      
                                    </select>
                                    
                                </li>
                                <li>
                                  <select class="form" id="cmbGiaDen">
                                      <option value="0" disabled selected>Đến</option>
                                      <option value="0">ALL</option>
                                      @foreach($dsGiaDen as $giaden)
                                        <option value="{{$giaden}}">{{number_format($giaden)}}</option>
                                      @endforeach
                                      
                                    </select>
                                </li>
                                
                                <?php 
                                  $dsDT = [];
                                  for($i=10; $i<=100; $i+= 10){
                                  array_push($dsDT, $i);}
                                 ?>
                                <li>
                                    <select class="form" id="cmbDienTich">
                                      <option value="0" disabled selected>Diện Tích</option>
                                      <option value="0">ALL</option>
                                        @foreach($dsDT as $DT)
                                        <option value="{{$DT}}">{{number_format($DT)}} m2</option>
                                        @endforeach
                                      
                                      
                                    </select>
                                </li>
                        
                                <li>
                                  <!-- onchange="getval(this);" -->
                                    <select class="form"  id="selectlocation">
                                      <option value="0" disabled selected>Chọn Trường Học</option>
                                      <option value="0">ALL</option>
                                        @foreach($dsTruong as $tr)
                                        <option value="{{$tr->t_vido}}|{{$tr->t_kinhdo}}">{{$tr->t_ten}}</option>
                                        @endforeach
                                      
                                    </select>
                                </li>
                                <li>
                                 
                                    <button type="button" id="btnTimkiem" name="btnTimkiem" class="text-center form-btn" style="width: 100%; background-color: white; color: black">Tìm Kiếm</button>
                                    <!-- <button id="btnTimkiem" class=" btn btn-default navbar-right" type="button">Tìm Kiếm</button> -->
                                  
                                    
                                </li>
                                <!-- <ul class="nav navbar-nav navbar-right"> -->
                        <!-- Authentication Links -->
                                @guest
                                <li>
                                    <a class="color_animation" href="{{ route('login')}}">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a class="color_animation" href="{{ route('register')}}" style="margin-left: 2px!important"> | Đăng Kí</a>
                                </li>
                                   
                                @else
                                <!--  -->

                                    <li class="dropdown">
                                        <!-- <a href="#" class="color_animation" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                            {{ Auth::user()->name }} <span class="caret" class="color_animation"></span>
                                        </a> -->
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="dropdown" >
                                              <a href="" class="dropdown-toggle"  data-toggle="dropdown" style="color: white" >{{ Auth::user()->name }} <span class="caret"></span></a>
                                              <ul class="dropdown-menu" role="menu">
                                                
                                                <li><a href="{{ route('profile') }}" target="_blank">Thông Tin Tài Khoản</a></li>
                                                <li><a href="{{ route('nhatrofrontend.create') }}" target="_blank">Đăng Kí Nhà Trọ</a></li>
                                                <li class="divider"></li>
                                                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">Đăng Xuất</a></li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                <!-- <li><a href="#">Something else here</a></li>
                                                
                                                <li><a href="#">Separated link</a></li> -->
                                              </ul>
                                            </li>
                                        </ul>

                                        <!-- <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">Đăng Xuất
                                                </a>
                                                <a href="{{ route('profile') }}">Thông Tin Tài Khoản
                                                </a>

                                                

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul> -->
                                    </li>
                                @endguest
                   
                                <!-- <li>
                                    <a class="color_animation" href="">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a class="color_animation" href="" style="margin-left: 2px!important"> | Đăng Kí</a>
                                </li> -->
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
            <!-- <link rel="stylesheet" href="{{ asset ('js/jqueryMap.js') }}"> -->
            <!-- <script src="{{ asset ('js/jqueryMap.js') }}"></script> -->
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
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
  
  
</script>
<script>
  var map, marker;
  var mapDiv = document.getElementById('map');
  var myLatLng = {lat: 10.0309641000, lng: 105.7689041000};
  function initMap() {
        map = new google.maps.Map(mapDiv, {
          center: myLatLng,
          zoom: 15,
          zoomControl: false,
          streetViewControl: false,
          scrolwheel : true,
        });
        marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Vị Trí Của Tôi',
          draggable: true,
          // icon: 'http://maps.google.com/mapfiles/ms/micons/green.png'
        });
       google.maps.event.addListener(marker,'position_changed',function(){
    var lat = marker.getPosition().lat();
    var lng = marker.getPosition().lng();
    $('#lat').val(lat);
    $('#lng').val(lng);
  });
  @foreach($dsTruong as $Tr)
    var school = new google.maps.Marker({
    position:{
      lat:{{$Tr->t_vido}},
      lng:{{$Tr->t_kinhdo}},
    },
    map:map,
    icon: '{{ asset ('theme/homepage/image/school.png') }}'
    
  });
  var infowindow = new google.maps.InfoWindow();  
        google.maps.event.addListener(school, 'click', (function(school) {  
           return function() {
               var content = '<div id="iw-container">' +
                    '<div class="iw-title">{{$Tr->t_ten}}</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Tọa Độ: {{$Tr->t_vido}} , {{$Tr->t_kinhdo}}</div>'+
                      '<img src="{{ asset ('theme/homepage/image/school.png') }}" alt="Porcelain Factory of Vista Alegre" height="50" width="50">' +
                  '</div>';  
               infowindow.setContent(content);  
               infowindow.open(map, school);  
           }  
         })(school));
  @endforeach
  @foreach($dsnhatro as $nt)
    var home = new google.maps.Marker({
    position:{
      lat:{{$nt->nt_vido}},
      lng:{{$nt->nt_kinhdo}},
    },
    map:map,
    icon: '{{ asset ('theme/homepage/image/house.png') }}'
    
  });
  var infowindow = new google.maps.InfoWindow();  
        google.maps.event.addListener(home, 'click', (function(home) {  
           return function() {
              var content = '<div id="iw-container">' +
                    '<div class="iw-title">{{$nt->nt_ten}}</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">Thông Tin: </div>' +
                      '<img src="{{ asset('upload/' . $nt->ha_ten)}}" alt="" height="150" width="100">' +
                      '<p>Địa Chỉ: {{$nt->nt_diachi}}</p>' +
                      '<p>Kinh Độ: {{$nt->nt_kinhdo}}</p>' +
                      '<p>Vĩ Độ: {{$nt->nt_vido}}</p>' +
                      '<p>Giá Thuê: {{$nt->nt_giathue}}</p>' +
                      '<p>Giá Nước: {{$nt->nt_gianuoc}}</p>' +
                      '<p>Giá Điện: {{$nt->nt_giadien}}</p>' +
                      '<div class="iw-subTitle">Liên Hệ: </div>' +
                      '<p>Liên Hệ: {{$nt->name}}<br>'+
                      '<br>SĐT : {{$nt->nt_sdtlienhe}}<br>e-mail: {{$nt->email}}<br><a style="color: red;" href="{{ route('nhatrofrontend.show', ['nhatro' => $nt->nt_ma]) }}" target="_blank">Xem Chi Tiết</a></p>'+
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>';
                  infowindow.setContent(content);
                  infowindow.open(map, home);
                     
           }  
         })(home));
                              
  @endforeach
  //   var content = '<div id="iw-container">' +
  //                   '<div class="iw-title">Vị Trí Của Tôi: </div>' +
  //                   '<div class="iw-content">' +
  //                     '<div class="iw-subTitle">Tọa Độ: </div>'+
  //                     '<img src="{{ asset ('theme/homepage/image/mar.png') }}" alt="Porcelain Factory of Vista Alegre" height="50" width="50">' +
  //                 '</div>';
  // // A new Info Window is created and set content
  // var infowindow = new google.maps.InfoWindow({
  //   content: content,
  //   maxWidth: 300
  // });
  // This event expects a click on a marker
  // When this event is fired the Info Window is opened.
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
  // Event that closes the Info Window with a click on the map
  google.maps.event.addListener(map, 'click', function() {
    infowindow.close();
  });
  google.maps.event.addListener(infowindow, 'domready', function() {
    var iwOuter = $('.gm-style-iw');
    var iwBackground = iwOuter.prev();
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});
    iwOuter.parent().parent().css({left: '115px'});
    iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
    iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});
    var iwCloseBtn = iwOuter.next();
    iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #48b5e9', 'border-radius': '13px', 'box-shadow': '0 0 5px #3990B9'});
    if($('.iw-content').height() < 140){
      $('.iw-bottom-gradient').css({display: 'none'});
    }
    iwCloseBtn.mouseout(function(){
      $(this).css({opacity: '1'});
    });
    
  });
  google.maps.event.addDomListener(window, 'load', initMap);
  var customMapType = new google.maps.StyledMapType([
          {stylers: [{hue: '#D2E4C8'}]},
          {
                featureType: 'water',
                stylers: [{color: '#599459'}]
              },
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
  function setci(){
    
    var circle = new google.maps.Circle({
          map: map,
          radius: 1000,
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            // fillColor: '#FF0000',
            fillOpacity: 0.35,    
          fillColor: '#CCFFFF'
        });
        circle.bindTo('center', marker, 'position');
  };
    function remove_circle(circle) {
      // remove event listers
      google.maps.event.clearListeners(circle, 'click_handler_name');
      google.maps.event.clearListeners(circle, 'drag_handler_name');
      circle.setRadius(0);
      circle.setMap(null);
      // initMap();
  };
      jQuery(document).on('change','#selectlocation',function() {
        var latlngzoom = jQuery(this).val().split('|');
        var newzoom = 15,
        newlat = 1*latlngzoom[0],
        newlng = 1*latlngzoom[1];
        map.setZoom(newzoom);
        map.setCenter({lat:newlat, lng:newlng});
        marker.setPosition({lat:newlat, lng:newlng});
        // initMap();
        setci();
        // remove_circle(circle);
      });
    // setci();
    geolocate();
    initMap();
</script>
<!-- <script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','#cmbLoaiNhaTro',function(){
            // console.log("hmm its change");

            var lnt_ma=$(this).val();
            console.log(lnt_ma);
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('timkiem')!!}',
                data:{'id':lnt_ma},
                success:function(data){
                    // console.log('success');

                    

                    // console.log(data.length);
                   //  op+='<option value="0" selected disabled>chose product</option>';
                   //  for(var i=0;i<data.length;i++){
                   //  op+='<option value="'+data[i].id+'">'+data[i].nt_ten+'</option>';
                   // }

                   // div.find('.nt_ten').html(" ");
                   // div.find('.nt_ten').append(op);
                },
                error:function(){

                }
            });
        });

        $(document).on('change','#cmbDienTich',function () {
            var dt=$(this).val();

            // var a=$(this).parent();
            console.log(dt);
            // console.log(a);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('timkiem')!!}',
                data:{'id':dt},
                dataType:'json',//return data will be json
                success:function(data){
                    // console.log("price");
                    // console.log(data.price);

                    // here price is coloumn name in products table data.coln name

                    // a.find('.prod_price').val(data.price);

                },
                error:function(){

                }
            });


        });
        $(document).on('change','#cmbGiaTu',function () {
            var gt=$(this).val();

            // var a=$(this).parent();
            console.log(gt);
            // console.log(a);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('timkiem')!!}',
                data:{'id':gt},
                dataType:'json',//return data will be json
                success:function(data){
                    // console.log("price");
                    // console.log(data.price);

                    // here price is coloumn name in products table data.coln name

                    // a.find('.prod_price').val(data.price);

                },
                error:function(){

                }
            });


        });

        $(document).on('change','#cmbGiaDen',function () {
            var gd=$(this).val();

            // var a=$(this).parent();
            console.log(gd);
            // console.log(a);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('timkiem')!!}',
                data:{'id':gd},
                dataType:'json',//return data will be json
                success:function(data){
                    // console.log("price");
                    // console.log(data.price);

                    // here price is coloumn name in products table data.coln name

                    // a.find('.prod_price').val(data.price);

                },
                error:function(){

                }
            });


        });

    });
</script> -->
<!-- <script>
$(document).ready(function(){
  $("#btnTimkiem").click(function(){
    var loainhatro = $("#cmbLoaiNhaTro").val();
    var giatu = $('#cmbGiaTu').val();
    var giaden = $('#cmbGiaDen').val();
    var dientich = $('#cmbDienTich').val();
    // console.log(loainhatro);
    // console.log(giatu, giaden);
    // console.log(dientich);
    location.href = "/nhatrosinhvien/public/timkiem/"+loainhatro+"/"+giatu+"/"+giaden+"/"+dientich;
    // $.ajax({
    //   type: 'get',
    //   dataType: 'html',
    //   url: '{{url('/timkiem')}}',
    //   // url:'{!!URL::to('timkiem')!!}',
    //   // data:'lnt_ma=' + loainhatro + '&giatu=' + giatu + '&giaden=' + giaden +'&dientich=' + dientich,


    //   success:function(response){
    //     // console.log(data);
    //     console.log(response);
    //     // $("#productData").html(response);
    //   }
    // });
  });
});
</script> -->
<script>


    $(document).ready(function(){
        $("#btnTimkiem").click(function(){
        loainhatro = $("#cmbLoaiNhaTro").val();
        giatu = $('#cmbGiaTu').val();
        giaden = $('#cmbGiaDen').val();
        dientich = $('#cmbDienTich').val();
        // giaDen = $('#cmbgiaDen :selected').val();

        location.href = "/nhatrosinhvien/public/timkiem/"+loainhatro+"/"+giatu+"/"+giaden+"/"+dientich;


    });
});
</script>


        </body>
    </html>