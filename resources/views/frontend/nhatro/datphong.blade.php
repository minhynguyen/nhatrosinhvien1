    <!DOCTYPE html>
    <html>
         <head>
            <meta charset="UTF-8">
            <title>Hẹn Xem Phòng</title>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/dat.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/footer.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/show.css') }}">
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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q"
  type="text/javascript"></script>
            
      </head>
     

        <body>

           
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
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

                                              </ul>
                                            </li>
                                        </ul>

                                       
                                    </li>
                                @endguest
                            </ul>
                    </div>
                        
                    </div>

                </div><!-- /.container-fluid -->
            </nav>
             
        
        <form name="frmdat" method="POST" action="{{route('datphongfrontend.store')}}"> <!-- action tu controller -->
          {{ csrf_field() }}


            <div class="description_content">

              
                <div class="text-content container">
                  <div class="col-md-12">
                    <div class="col-lg-4 col-sm-6">
                      <div class="product-list-left-effect">
                      <img src="{{ asset ('theme/homepage/image/dat2.jpg') }}"  class="img-fluid" />

                      <div class="product-overlay">
                      <h3>Bước 1</h3>
                      <h4>Chọn Nhà Trọ Thích Hợp Với Bạn</h4>
                      </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                      <div class="product-list-left-effect">
                      <img src="{{ asset ('theme/homepage/image/dat4.jpg') }}" class="img-fluid" />

                      <div class="product-overlay">
                      <h3>Bước 2</h3>
                      <h3>Điền Thông Tin Vào Form Hẹn Xem Phòng.</h3>
                      <h3>Check Mail Xác Nhận.</h3>
                      </div>
                      </div>
                      </div>


                      <div class="col-lg-4 col-sm-6">
                        <div class="product-list-left-effect">
                        <img src="{{ asset ('theme/homepage/image/dat3.jpg') }}" class="img-fluid" />

                        <div class="product-overlay">
                        <h3>Bước 3</h3>
                        <h3>Đến Xem Nhà</h3>
                        </div>
                        </div>
                        </div>
                  </div>
                    <div class="col-md-6">
                      
                       <div id='nz-div-2' style="margin-top: -15px;">
                        <h3 class="tde" style="margin-left:-350px !important">         
                             <span>Hẹn Xem Phòng</span>
                        </h3>
                        <hr>
                      </div>
                        <!-- <h1 style="font-family: Pacifico!important">Hẹn Xem Phòng</h1> -->
                         <!-- {{$nhatro -> nt_ten}} -->
                        <!-- <div class="fa fa-home fa-2x"></div> -->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="offer offer-success" style="margin-top: 10px;">
                            <div class="offer-content">
                               <h2>Thông Tin Nhà Trọ</h2>
                              {{$nhatro->nt_ten}} <br/>
                              {{$nhatro->nt_diachi}}
                            </div>
                          </div>
                         
                          
                        </div>

                        <div class="panel panel-success">
                          <div class="panel-body">
                            <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                            <span><strong>Mã Nhà Trọ:</strong></span>
                            <input type="text" name="nt_ma" class="form" style="width: 100%; margin-top: 10px" placeholder="Họ Và Tên" value="{{$nhatro->nt_ma}}" readonly="nt_ma">
                        </div>

                        <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                            <span><strong>Tên Người Đặt:</strong></span>
                            <input type="text" name="" class="form" style="width: 100%; margin-top: 10px" placeholder="Họ Và Tên" value="{{ Auth::user()->name}}" readonly="name">
                        </div>

                        

                        <div class="col-md-12" style="margin-top: 10px; text-align: left;">
                            <span><strong>Email Người Đặt:</strong></span>
                            <input type="text" name="" class="form" style="width: 100%" placeholder="Email" value="{{ Auth::user()->email}}" readonly="Email">
                        </div>

                        <div class="col-md-12" style="margin-top: 10px; text-align: left;">
                            <span><strong>Số Điện Thoại Người Đặt:</strong></span>
                            <input type="text" name="dp_sdt" class="form" style="width: 100%" placeholder="Số Điện Thoại">
                        </div>

                        
                        
                        <div class="col-md-12" style="margin-top: 10px; text-align: left;">
                              <span><strong>Ghi Chú:</strong></span>
                              <textarea name="dp_ghichu" class="form textarea"  placeholder="Nội dung bài đăng" style="width: 100%">{{old('dp_ghichu')}}</textarea>
                        </div>
                          </div>
                        </div>
                        
                        


                        <div class="col-md-12" style="margin-top: 10px">
                            <button type="submit" id="submit" name="submit" class="text-center form-btn" style="width: 100%; background-color: #00b9a0">Đặt Xem Phòng</button>
                        </div>

                        
                    </div>
                    <div class="col-md-6">
                        <div class="img-section">
                           <img style="height: 220px; width: 250px !important" src="{{ asset ('theme/homepage/image/anh1.jpg') }}" width="250" height="220">
                           <img style="height: 220px !important" src="{{ asset ('theme/homepage/image/anh2.jpg') }}" width="250" height="220">
                           <div class="img-section-space"></div>
                           <img style="height: 220px !important" src="{{ asset ('theme/homepage/image/pic2.jpg') }}"  width="250" height="220">
                           <img style="height: 220px !important" src="{{ asset ('theme/homepage/image/pic3.jpg') }}"  width="250" height="220">
                       </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <!-- <h2 style="margin-top: 20px">Danh Sách Đặt Phòng</h2> -->
                      <div id='nz-div-2' style="margin-top: 10px;">
                        <h3 class="tde" style="margin-left:-255px !important">         
                             <span>Danh Sách Đặt Phòng</span>
                        </h3>
                        <hr>
                      </div>
                      <div class="panel panel-warning">
                        <div class="panel-body">
                          <table class="table table-striped table-bordered table-list">
                        <thead>
                          <tr>
                            <th style="text-align: center;">Giờ Đặt</th>
                            <th style="text-align: center;">Hết Hạn</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($dsdat as $ds)
                          <tr>
                            <td>{{$ds->dp_thoigiandat}}</td>
                            <td>{{$ds->dp_thoigianketthuc}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                        
                      </table>
                        </div>
                      </div>
                      
                    </div>
                </div>
            </div>
          </form>


          
            <footer>
  <div class="container">
    <div class="row">
  
    <div class="col-sm-12">
      <h3 class="footer_h3">Hệ Thống Gợi Ý Tìm Nhà Trọ Cho Sinh Viên Khu Vực Thành Phố Cần Thơ</h3>
      <!-- <ul class="footer_ul">
        <li><a href="#">Home</a></li>
        <li><a href="faq.php">FAQs</a></li>
        
      </ul> -->
    </div>
  
   <!--  <div class="col-sm-3">
      <h3 class="footer_h3">Useful Links</h3>
      <ul class="footer_ul">
        <li><a href="#">Space Adventure</a></li>
        <li><a href="#">Mr. Chicken</a></li>
       
      </ul>
    </div>
  
    <div class="col-sm-3 col-sm-offset-3"> 
      <h3 class="footer_h3 fb">Facebook</h3>
    </div> -->
    </div> 
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
         <p>© Copyright   2018. All rights reserved</p>
      </div>
    </div>
  </div>
</footer>

            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.min.js') }}"> </script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/bootstrap.min.js') }}" ></script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.js') }}"></script>     
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery.mixitup.min.js') }}" ></script>
            <script src="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
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