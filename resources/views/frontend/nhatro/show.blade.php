<!DOCTYPE html>
<html>

     <head>
        <meta charset="UTF-8">
        <title>Nhà Trọ Sinh Viên</title>
        <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
        <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset ('theme/homepage/css/tt.css') }}"> -->
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
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places"
        async defer></script> -->
        
        
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
                   <div class="navbar-header">
                        <a class="navbar-brand" href="index.html" style="margin-left: -50px; padding-top: 20px">NhàTrọSinhViên</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <div class="description_content">
          <div class="text-content container">
            <div class="container">
              <div class="row">
                <div class="col-md-7 ">
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
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
              </div>
                  </div>

                  <div class="col-md-5">
                    @foreach($nhatro as $nt)
                    <h3>{{$nt->nt_ten}} <span class="in_sport"></span></h3>
                    <table class="table">
                          <tbody>
                            <tr>
                                  <td style="text-align: left;"><span>Liên Hệ: </span></td>
                                  <td style="text-align: right;">{{$nt->name}}</td>
                            </tr>
                            <tr>
                                  <td style="text-align: left;"><span>Số Điện Thoại: </span></td>
                                  <td style="text-align: right;">{{$nt->nt_sdtlienhe}}</td>
                            </tr>
                            <tr>
                                  <td style="text-align: left;"><span>Địa Chỉ: </span></td>
                                  <td style="text-align: left;">{{$nt->nt_diachi}}</td>
                            </tr>
                            <!-- <tr>
                                  <td style="text-align: left;"><span>Giá Thuê: </span></td>
                                  <td style="text-align: right;">{{$nt->nt_giathue}} </td>
                            </tr> -->
                            <tr>
                                  <td style="text-align: left;"><span>Giá Điện: </span></td>
                                  <td style="text-align: right;">{{$nt->nt_giadien}} (~ Kw/h) </td>
                            </tr>
                            <tr>
                                  <td style="text-align: left;"><span>Giá Nước: </span></td>
                                  <td style="text-align: right;">{{$nt->nt_gianuoc}} (~ M<sup>3</sup>)</td>
                            </tr>
                          </tbody>
                    </table>
                    
                    <hr>
                    <div class="row">
                          <div class="col-md-12">
                        <!-- <h6><span>Retail Price</span></h6> -->
                        <h3 class="price">Giá Thuê: {{$nt->nt_giathue}} /Tháng</h3>
                        <!-- <h4><span>Email ID- : ravi7284007@gmail.com</span></h4> -->
                      </div>
                    </div>
    <!-- <a href="#0" class="btn btn-cart">ADD TO CART</a> </div> -->
                  </div>
                </div>
                <div style="margin-top: 20px; margin-bottom: 20px">
                    <h2>THÔNG TIN CHI TIẾT VỀ NHÀ TRỌ</h2>
                </div>
              </div>


<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group">
                          <div class="btn-group" role="group">
                              <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                  <div class="hidden-xs">Thông Tin Chung</div>
                              </button>
                          </div>
                          <div class="btn-group" role="group">
                              <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                  <div class="hidden-xs">Sơ Đồ Nhà Trọ</div>
                              </button>
                          </div>
                          <div class="btn-group" role="group">
                              <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                  <div class="hidden-xs">Bài Đăng</div>
                              </button>
                          </div>
                          <div class="btn-group" role="group">
                              <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="fa fa-comments" aria-hidden="true"></span>
                                  <div class="hidden-xs">Bình Luận/ Đánh Giá</div>
                              </button>
                          </div>
                      </div>

                      <div class="well" style="background-color: white">
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="tab1">
                      <p class="desc-text">Loại Nhà Trọ: {{$nt->lnt_ten}}</p>
                      <p class="desc-text">Giá Điện: {{$nt->nt_giadien}}</p>
                      <p class="desc-text">Giá Nước: {{$nt->nt_gianuoc}}</p>
                        
                      <div class="fa fa-cogs fa-2x" style="text-align: left;"> Tiện ích phòng trọ</div>
                        <div class="checkbox" style="text-align: left;">
                          @foreach ($dstienich as $ti)
                          <label><input type="checkbox"  value="{{$ti->ti_ma}}" <?php echo ($ti->ti_ma == $ti->ti_ma) ? 'checked' : ''  ?> >{{$ti->ti_ten}}</label>
                          @endforeach
                      </div>
                      
                      </div>
                      <div class="tab-pane fade in" id="tab2">
                        <div id="map"></div>
                       
                      </div>
                      <div class="tab-pane fade in" id="tab3">
                        <h3>Bài Đăng</h3>
                        @foreach($baidang as $bd)
                        <p class="desc-text">Loại Bài Đăng: {{$bd->lbd_ten}}</p>
                        <p class="desc-text">Tiêu Đề: {{$bd->bd_tieude}}</p>
                        <p class="desc-text">Nội Dung: {{$bd->bd_noidung}}</p>
                        
                        @endforeach
                        
                      </div>
                      <div class="tab-pane fade in" id="tab4">
                        <!-- <h3>This is tab 3</h3> -->
                          <!-- <div class="col-md-6" style="margin-top: 10px"> -->
                            <div class="fa fa-comments fa-2x" > Bình Luận Về Nhà Trọ</div>
                            <div class="comments-list">
                              @foreach($dsbinhluan as $bl)
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
                                  @endforeach
                                </div>
                                @if(isset(Auth::user()->id))
                                
                                <div class="panel panel-info" style="margin-top: 50px ">
                                      <div class="panel-body">
                                          <form class="form-inline" name="frmBinhLuan" method="POST" action="{{ route('binhluan.update', ['baidang' => $bd->bd_ma]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}

                                          <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea" name="bl_noidung"></textarea>
                                              <button class="btn btn-primary pull-right" type="submit">Gửi Bình Luận</button>
                                          </form>
                                      </div>
                                  </div>
                                @endif
                      </div>
                    </div>

                  </div>
                  @endforeach
                  
              
      
            


              






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
        <script>
          @foreach($nhatro as $nt)
  var lat = {{$nt->nt_vido}};
  var lng = {{$nt->nt_kinhdo}};

  var map = new google.maps.Map(document.getElementById('map'),{
    center:{
      lat: lat,
      lng: lng
    },
    zoomControl: false,
    streetViewControl: false,
    scrolwheel : true,
    zoom: 17
  });
  var marker = new google.maps.Marker({
    position:{
      lat:lat,
      lng: lng,
      
    },
    map:map,
    icon: '{{ asset ('theme/homepage/image/house.png') }}'
  });
  @endforeach
  // @foreach($nhatro as $nt)
  // var map, marker;
  // var mapDiv = document.getElementById('map');
  // var myLatLng = {lat: {{$nt->nt_vido}}, lng: {{$nt->nt_kinhdo}} };
  //     function initMap() {
  //       map = new google.maps.Map(mapDiv, {
  //         center: myLatLng,
  //         zoom: 16,
  //         zoomControl: false,
  //         streetViewControl: false,
  //         scrolwheel : true,
  //       });
  //       marker = new google.maps.Marker({
  //         position: myLatLng,
  //         map: map,
  //         icon: '{{ asset ('theme/homepage/image/home.png') }}'
  //       });
  //       @endforeach
          
</script>

</body>
</html>