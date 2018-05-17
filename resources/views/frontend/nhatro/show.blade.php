<!DOCTYPE html>
<html>
     <head>
        <meta charset="UTF-8">
        <title>Nhà Trọ Sinh Viên</title>
        <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
        <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/show.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset ('theme/homepage/css/tt.css') }}"> -->
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <!-- <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap.css') }}"> -->
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/style-portfolio.css') }}">
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/picto-foundry-food.css') }}">
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset ('theme/homepage/css/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset ('theme/homepage/image/icon.ico') }}" type="image/x-icon">
        <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.min.js') }}"> </script>
        <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
        <link rel="stylesheet" src="{{ asset ('js/bootstrap.min.js') }}">
        
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->


        
        
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places"
        async defer></script> -->
        
        
<style>
#map{
width: 100%;
height: 300px;

}

#map1{
width: 100%;
height: 300px;

}


</style>




        
  </head>
 

    <body>

       
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                   <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('index')}}" style="margin-left: -50px; padding-top: 20px">NhàTrọSinhViên</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav main-nav  clear navbar-right">
                              <li>
                              </li>
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
                                                @if( Auth::user()->loai === 0 )
                                                <li>
                                                  <a href="{{ route('profile') }}" target="_blank">Thông Tin Tài Khoản</a>
                                                </li>
                                                @endif

                                                @if( Auth::user()->loai === 1 )
                                                <li>
                                                  <a href="{{ route('ttsinhvien') }}" target="_blank">Thông Tin Tài Khoản Sinh Viên</a>
                                                </li>
                                                @endif

                                                @if( Auth::user()->loai === 0 )
                                                <li>
                                                  
                                                  <a href="{{ route('nhatrofrontend.create') }}" target="_blank">Đăng Kí Nhà Trọ</a>
                                                  
                                                </li>
                                                @endif


                                                @if( Auth::user()->loai === 1 )
                                                <li><a href="{{ route('dangtin') }}">Đăng Tin Ở Ghép</a></li>
                                                @endif
                                                <!-- <li class="divider"></li> -->
                                                <li>
                                                    <a href="{{ route('changePassword1') }}" target="_blank">Đổi Mật Khẩu
                                                    </a>
                                                </li>
                                                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">Đăng Xuất</a></li>

                                                  <!-- <li><a href="#">Some other action</a></li> -->
                                                  <li class="divider"></li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>

                                                @if( Auth::user()->level === 1 )
                                                <li><a href="{{ route('admin.index') }}">Về Trang Quản Trị</a></li>
                                                @endif


                                                
                                                
                                                <!-- <li><a href="#">Separated link</a></li> -->
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
                            </ul>
                    </div>
                </div>

                <ul>
                  
                </ul>
            </div><!-- /.container-fluid -->
        </nav>
        <div class="description_content">
          <div class="text-content container">
            <div class="container">
              <div class="row">
                <div class="col-md-7" style="margin-top: 25px;">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      @foreach($slider as $item)
                          <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}"
                              class="{{ $loop->first ? ' active' : '' }}"></li>
                      @endforeach
                  </ol>
                  <div class="carousel-inner">
                  @foreach($slider as $item)
                  <div class="item {{ $loop->first ? ' active' : '' }}">
                      <a href="{{$item->ha_ten}}">
                          <img src="{{ asset('upload/' . $item->ha_ten)}}" alt="{{ $item->ha_ten }}" style="margin: auto; height: 400px; width: 650px;">
                      </a>

                  </div>
                  @endforeach

                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="fa fa-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="fa fa-right"></span>
                <span class="sr-only">Next</span>
              </a>
              </div>
                  </div>
                  <div class="col-md-5">
                    @foreach($nhatro as $nt)
                    <!-- <h2 style="font-family: Pacifico; font-size: 40px !important; color: #bc6264">{{$nt->nt_ten}}</h2> -->
                    

                      <div class="offer offer-success">
                        <div class="offer-content">
                            <div id='nz-div-2'>
                              <h3 class="tde">         
                                   <span>{{$nt->nt_ten}}</span>
                              </h3>
                              <hr>
                            </div>
                      <table class="table">
                          <tbody>
                            <tr>
                                  <td style="text-align: left;"><span><strong>Liên Hệ:</strong></span></td>
                                  <td style="text-align: right;">{{$nt->name}}</td>
                            </tr>
                            <tr>
                                  <td style="text-align: left; width: 150px"><span><strong>Số Điện Thoại:</strong></span></td>
                                  <td style="text-align: right;">{{$nt->nt_sdtlienhe}}</td>
                            </tr>
                            <tr>
                                  <td style="text-align: left; width: 150px"><span><strong>Email:</strong></span></td>
                                  <td style="text-align: right;">{{$nt->email}}</td>
                            </tr>

                            <tr>
                                  <td style="text-align: left;"><span><strong>Địa Chỉ:</strong> </span></td>
                                  <td style="text-align: right;">{{$nt->nt_diachi}}</td>
                            </tr>

                            <tr>
                                  <td style="text-align: left;"><span><strong>Loại Nhà Trọ:</strong> </span></td>
                                  <td style="text-align: right;">{{$nt->lnt_ten}}</td>
                            </tr>

                            <tr>
                                  <td style="text-align: left;"><span><strong>Diện Tích:</strong> </span></td>
                                  <td style="text-align: right;">{{$nt->nt_dientich}} (~ M<sup>2</sup>)</td>
                            </tr>
                            <tr>
                                  <td style="text-align: left;"><span><strong>Giá Điện: </strong></span></td>
                                  <td style="text-align: right;">{{$nt->nt_giadien}} (~ Kw/h) </td>
                            </tr>
                            <tr>
                                  <td style="text-align: left;"><span><strong>Giá Nước:</strong></span></td>
                                  <td style="text-align: right;">{{$nt->nt_gianuoc}} (~ M<sup>3</sup>)</td>
                            </tr>
                            <tr>
                                  <td style="text-align: left;"><span><strong>Giá Thuê:</strong></span></td>
                                  <td style="text-align: right;">{{$nt->nt_giathue}} (/Tháng)</td>
                            </tr>
                            
                          </tbody>

                    </table>
                      
                          <div style="float: right; margin-bottom: 5px;">
                          <a data-toggle="modal" href='#modal-2' style="color: red">Xem Tiện Ích Nhà Trọ >></a>
                          </div>
                        </div>
                        
                        
                      </div>

                        <div class="modal fade" id="modal-2" style="margin-top: 50px;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color: #00846b">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title fa fa-cogs fa-2x" style="color: 
                                white"> Tiện Ích Nhà Trọ</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="checkbox" style="text-align: left;">
                                    @foreach ($dstienich as $ti)
                                    <label><input type="checkbox"  value="{{$ti->ti_ma}}" <?php echo ($ti->ti_ma == $ti->ti_ma) ? 'checked' : ''  ?> >{{$ti->ti_ten}}</label>
                                    @endforeach
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
         
                    <!-- <hr> -->
                    
    <!-- <a href="#0" class="btn btn-cart">ADD TO CART</a> </div> -->
                  </div>

                </div>
                <div>
                  <div class="btn btn-group" style="margin-top: 20px; margin-bottom: 20px">
                    <h2>SƠ ĐỒ NHÀ TRỌ</h2>

                      

                        
                      <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #10ada5"><i class="fa fa-car" ></i> Mở Chỉ Đường</button>

                      @if(isset(Auth::user()->id))
                        
                      
                        


                          @if (Auth::user()->loai === 1)

                            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal1" style="background-color: #10ada5"><i class="fa  fa-bicycle"></i> Xem Khoảng Cách</button>
                           <a class="btn btn-default btn-lg" href="{{ route('sinhvien.edit', ['nhatro' => $nt->nt_ma]) }}" style="background-color: #10ada5"><em class="fa fa-check"> Lưu Nhà Trọ</em></a>
                          @endif
                          <a class="btn btn-default btn-lg" href="{{ route('datphongfrontend.edit', ['nhatro' => $nt->nt_ma]) }}" style="background-color: #10ada5"><em class="fa fa-calendar"> Hẹn Xem Nhà</em></a>
                            
                      @endif
                    

                  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 110px;">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Hướng Dẫn Đường Đến Nhà Trọ</h4>
                        </div>
                        <!-- <div class="modal-body"> -->
                          <div id="map"></div>
                        <!-- </div> -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  </div>
                </div>

                <div style="margin-top: 20px; margin-bottom: 20px">
                    <!-- <h2>THÔNG TIN CHI TIẾT VỀ NHÀ TRỌ</h2> -->
                    <div id='nz-div-2'>
                        <h3 class="tde" style="margin-left:-760px !important;">         
                             <span>BÀI ĐĂNG TIN CHO THUÊ NHÀ TRỌ</span>
                        </h3>
                        <hr>
                      </div>
                      <div class="col-md-12">
                        @foreach($baidang as $bd)
                      <div class="row"> 
                      <div class="col-xs-12 col-sm-3 col-md-3">
                          <div class="offer offer-success">
                            
                            <?php  
                                  $count = 0;
                                 ?>
                              @foreach($dsbinhluan as $bl)
                              @if($bl->bd_ma === $bd->bd_ma)
                                  <?php 
                                    $count +=1;
                                   ?>
                                   @endif
                                   @endforeach
                                  
                          <a href="#">
                              <img src="{{ asset ('upload/chothue.jpg')}}" class="img-responsive img-box img-thumbnail"> 
                          </a>
                        </div>
                      </div> 
                      <div class="col-xs-12 col-sm-9 col-md-9">
                          <div class="list-group" style="text-align: left;">
                              <div class="list-group-item"">
                                <div class="col-md-12">
                                  <div class="col-md-8" style="float: left;">
                                    <h3>{{$bd->bd_tieude}}</h3>
                                  </div>
                                  <div class="col-md-4">
                                    <h3> <?php \Carbon\Carbon::setLocale('vi')?>
                                     {{ \Carbon\Carbon::createFromTimeStamp(strtotime($bd->bd_taomoi  ))->diffForHumans() }}
                                    </h3>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="col-md-8" style="float: left;">
                                    <h4><i class="fa fa-user"></i> Người Đăng: {{$bd->name}}</h4>
                                     <h4><i class="fa  fa-tags"></i> Loại Bài Đăng: {{$bd->lbd_ten}}</h4>
                                    <div style="text-align: left;">
                                      <h4><i class="fa fa-align-justify"></i> Nội Dung:</h4>
                                    {!! $bd->bd_noidung !!}
                                    </div>
                                      </div>
                                  <div class="col-md-4">
                                    
                                    @if ($bd->loai === 0)
                                     <h4><i class="fa fa-street-view"></i> Vai Trò: Chủ Trọ</h4>
                                    
                                    @else
                                    <h4><i class="fa fa-street-view"></i> Vai Trò: Sinh Viên</h4>
                                    @endif
                                  </div>
                                </div>
                                
                                
                                
                              </div>

                          </div>
                         
                          
                      </div>

                  </div>
                    
                     <div class="panel panel-info">
                              <div class="panel-body">
                              <div class="comments-list">
                              @foreach($dsbinhluan as $bl)
                              @if($bl->bd_ma === $bd->bd_ma)
                       <div class="media">
                          
                           <p class="pull-right"><small><!-- {{$bl->bl_taomoi}} -->
                              <?php \Carbon\Carbon::setLocale('vi')  ?>
                             {{ \Carbon\Carbon::createFromTimeStamp(strtotime($bl->bl_taomoi  ))->diffForHumans() }}

                             
                             </small></p>
                            
                            <div class="media-body">
                                
                              <h4 class="media-heading user_name">{{$bl->name}}</h4>
                              {{$bl->bl_noidung}}
                              
                              
                            </div>
                          </div>
                          @endif
                          @endforeach
                        </div>
                        </div>
                        
                        @if(isset(Auth::user()->id))
                        <div class="panel-body">
                            <form class="form-inline" name="frmBinhLuan" method="POST" action="{{ route('binhluan.update', ['baidang' => $bd->bd_ma]) }}">
                              {{ csrf_field() }}
                              {{ method_field('PATCH') }}

                            <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea" name="bl_noidung"></textarea>
                                <button class="btn btn-primary pull-right" type="submit">Gửi Bình Luận</button>
                            </form>
                        </div>
                        @endif
                        
                    </div>
                    <hr>
                    @endforeach

                        
         
                    </div>





                </div>
              </div>
                  @endforeach

                   @if(isset(Auth::user()->id) )
                    @if(isset($truong))
                      @foreach($truong as $t)

                      
                  <div style="margin-top: 20px; margin-bottom: 20px">
                    
                  <div class="modal fade" id="myModal1" role="dialog" style="margin-top: 110px;">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Khoảng Cách Từ Trường {{$t->t_ten}}  Đến Nhà Trọ {{$nt->nt_ten}}</h5>
                      </div>
                      <!-- <div class="modal-body"> -->
                        <div id="map1"></div>
                      <!-- </div> -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
                  </div>
                  @endforeach
                  @endif
                  @endif

                  
              
      
            


              






          </div>

        </div>

        



        
        <footer class="sub_footer" style="margin-top: 55px">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
              $(".btn-pref .btn").click(function () {
                  $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
                  // $(".tab").addClass("active"); // instead of this do the below 
                  $(this).removeClass("btn-default").addClass("btn-primary");   
              });
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places"
        ></script>

        <script type="text/javascript">
          $(document).ready(function() {
        $('#myModal').on('shown.bs.modal', function () {
            google.maps.event.trigger(map, "resize");
        });
        });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#myModal1').on('shown.bs.modal', function () {
            google.maps.event.trigger(map, "resize");
        });
        });
    </script>
<script>
  @foreach($nhatro as $nt)
  var lat = {{$nt->nt_vido}};
  var lng = {{$nt->nt_kinhdo}};
  var map, marker;
  var infowindow = new google.maps.InfoWindow();
  var mapDiv = document.getElementById('map');
  var myLatLng = {lat: 10.0309641000, lng: 105.7689041000};
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();
  var directionsDisplay = new google.maps.DirectionsRenderer({map: map});
  var service = new google.maps.DistanceMatrixService();
  function initMap() {

  map = new google.maps.Map(mapDiv, {
          center: myLatLng,
          zoom: 19,
          zoomControl: false,
          streetViewControl: false,
          scrolwheel : false,
        });
  marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Vị Trí Của Tôi',
          // draggable: true,
          // icon: 'http://maps.google.com/mapfiles/ms/micons/green.png'
        });
  var myLatLng = {lat: 10.0309641000, lng: 105.7689041000};
 
  var home = new google.maps.Marker({
    position:{
      lat:lat,
      lng: lng,
      
    },
    map:map,

    icon: '{{ asset ('theme/homepage/image/house.png') }}'
  });


  @endforeach







  // console.log(home.getPosition());

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
      


function GeolocationControl(){
      var geoButton = document.getElementById('curent-location');
      google.maps.event.addListener(geoButton, 'click', geolocate); 
    };
function geolocate(){
  if (navigator.geolocation) { //nếu trình duyệt lấy đc vị trí
          navigator.geolocation.getCurrentPosition(function(position) {
            console.log(position);
            var marker1 = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            map.setCenter(marker1);
            marker.setPosition(marker1);
            var directionsService = new google.maps.DirectionsService();


            // var school = {lat: 10.0309641000, lng: 105.7689041000};
            // marker.setPosition(school);
            var directionsRequest = {
              origin: home.getPosition(),
              destination: marker1,
              // destination: marker1,
              travelMode: google.maps.DirectionsTravelMode.DRIVING,

              // unitSystem: google.maps.UnitSystem.METRIC
            };
        directionsService.route(

          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              directionsDisplay.setDirections(response);
              directionsDisplay.setDirections(response);
              new google.maps.DirectionsRenderer({
                map: map,
                directions: response
              });
              
              service.getDistanceMatrix({
              origins: [home.getPosition()],

              destinations: [marker1],
              travelMode: 'DRIVING',

              
            }, function(response, status) {
              if (status === 'OK') {
                var originList = response.originAddresses;
                var destinationList = response.destinationAddresses;
                      for (var i = 0; i < originList.length; i++) {
                        var results = response.rows[i].elements;
                        for (var j = 0; j < results.length; j++) {
                          var element = results[j];
                          var dt = element.distance.text;
                          var dr = element.duration.text;
                        };
                      console.log(dt, dr);

                    };
                var content = '<div> Khoảng Cách: ' + dt + '<br> Thời Gian: ' +dr+ '<div>';
                infowindow.setContent(content);
                infowindow.setPosition(home.getPosition());
                infowindow.open(map);
                google.maps.event.addListener(home, 'mouseover', function() {
                  infowindow.open(map,home);
                });

                // Event that closes the Info Window with a click on the map
                google.maps.event.addListener(map, 'click', function() {
                  infowindow.close();
                });
                

              }
            });

            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );
          });
        }else{
          alert('use location');
        }
  };

  
  
      }
      
    
    initMap();
</script>





<script>
   
  
  
  
function initialize() {
        // var center = new google.maps.LatLng(37.4419, -122.1419);
var center = {lat: 10.0309641000, lng: 105.7689041000};
var map = new google.maps.Map(document.getElementById('map1'), {
  zoom: 15,
  center: center,
  zoomControl: false,
  streetViewControl: false,
  scrolwheel : false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
});
  @foreach($nhatro as $nt)
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();
  var directionsDisplay = new google.maps.DirectionsRenderer({map: map});
  var service = new google.maps.DistanceMatrixService();
  var lat = {{$nt->nt_vido}};
  var lng = {{$nt->nt_kinhdo}};
  var infowindow = new google.maps.InfoWindow();
  var home = new google.maps.Marker({
    position:{
      lat:lat,
      lng: lng,
      
    },
    map:map,

    icon: '{{ asset ('theme/homepage/image/house.png') }}'
  });


  @endforeach

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



        var directionsService = new google.maps.DirectionsService();

            @foreach($truong as $t)
              var lat = {{$t->t_vido}};
              var lng = {{$t->t_kinhdo}};

            @endforeach
            var school = {lat: lat, lng: lng};
            marker.setPosition(school);
            var directionsRequest = {
              origin: home.getPosition(),
              destination: school,
              // destination: marker1,
              travelMode: google.maps.DirectionsTravelMode.DRIVING,

              // unitSystem: google.maps.UnitSystem.METRIC
            };
        directionsService.route(

          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              directionsDisplay.setDirections(response);
              directionsDisplay.setDirections(response);
              new google.maps.DirectionsRenderer({
                map: map,
                directions: response
              });
              
              service.getDistanceMatrix({
              origins: [home.getPosition()],

              destinations: [school],
              travelMode: 'DRIVING',

              
            }, function(response, status) {
              if (status === 'OK') {
                var originList = response.originAddresses;
                var destinationList = response.destinationAddresses;
                      for (var i = 0; i < originList.length; i++) {
                        var results = response.rows[i].elements;
                        for (var j = 0; j < results.length; j++) {
                          var element = results[j];
                          var dt = element.distance.text;
                          var dr = element.duration.text;
                        };
                      console.log(dt, dr);

                    };
                var content = '<div> Khoảng Cách: ' + dt + '<br> Thời Gian: ' +dr+ '<div>';
                infowindow.setContent(content);
                infowindow.setPosition(home.getPosition());
                infowindow.open(map);
                google.maps.event.addListener(home, 'mouseover', function() {
                  infowindow.open(map,home);
                });

                // Event that closes the Info Window with a click on the map
                google.maps.event.addListener(map, 'click', function() {
                  infowindow.close();
                });
                

              }
            });

            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );

        }

  
      google.maps.event.addDomListener(window, 'load', initialize);



</script>
<script >
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




</body>
</html>