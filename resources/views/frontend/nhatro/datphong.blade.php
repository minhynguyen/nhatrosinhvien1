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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q"
  type="text/javascript"></script>
            
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
                            <ul class="nav navbar-nav main-nav  clear navbar-right">
                                <li>
                                    <!-- <select class="form">
                                      <option value="" disabled selected>Chọn Loại Nhà Trọ</option>
                                      <option>Nhà trọ độc lập</option>
                                      <option>Khu Nhà Trọ</option>
                                      <option>Ở Cùng Chủ Nhà</option>
                                      
                                    </select> -->
                                </li>
                                <li>
                                    <!-- <select class="form">
                                      <option value="" disabled selected>Chọn Mức Giá</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      <option>Trên 2 triệu</option>
                                      
                                    </select> -->
                                </li>
                                <li>
                                    <!-- <select class="form" >
                                      <option value="" disabled selected>Chọn Trường Học</option>
                                      <option>Đại Học Cần Thơ</option>
                                      <option>Đại Học Cần Thơ</option>
                                      <option>Đại Học Cần Thơ</option>
                                      
                                    </select> -->
                                </li>
                                <li>
                                    <!-- <select class="form" >
                                      <option value="" disabled selected>Diện Tích</option>
                                      <option>Trên 10m2</option>
                                      <option>Trên 10m2</option>
                                      <option>Trên 10m2</option>
                                      <option>Trên 10m2</option>
                                      
                                    </select> -->
                                </li>
                                <li>
                                    <!-- <select class="form" >
                                      <option value="" disabled selected>Chọn Số Lượng Khách</option>
                                      <option>Nhóm 1 đến 4 Khách</option>
                                      <option>Nhóm 5 đến 10 Khách</option>
                                      <option>Nhóm 10 đến 30 Khách</option>
                                      <option>Trên 30 Khách</option>
                                    </select> -->
                                </li>
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
             
            
        <form name="frmdat" method="POST" action="{{route('datphongfrontend.store')}}"> <!-- action tu controller -->
          {{ csrf_field() }}
            <div class="description_content">
                <div class="text-content container">
                    <div class="col-md-6">
                        <h1 style="font-family: Pacifico!important">Hẹn Xem Phòng</h1>
                         <!-- {{$nhatro -> nt_ten}} -->
                        <div class="fa fa-home fa-2x"></div>
                        <div>
                        <h2>Thông Tin Nhà Trọ</h2>
                        <h2>{{$nhatro->nt_ten}}</h2>
                        <h2>{{$nhatro->nt_diachi}}</h2>
                        </div>
                        <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                            <span><strong>Mã Nhà Trọ:</strong></span>
                            <input type="text" name="nt_ma" class="form" style="width: 100%; margin-top: 10px" placeholder="Họ Và Tên" value="{{$nhatro->nt_ma}}">
                        </div>

                        <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                            <span><strong>Tên Người Đặt:</strong></span>
                            <input type="text" name="" class="form" style="width: 100%; margin-top: 10px" placeholder="Họ Và Tên" value="{{ Auth::user()->name}}">
                        </div>

                        <!-- <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                            <span><strong>Tên Người Đặt:</strong></span>
                            <input type="text" name="" class="form" style="width: 100%; margin-top: 10px" placeholder="Họ Và Tên" value="{{ Auth::user()->name}}">
                        </div> -->

                        <div class="col-md-12" style="margin-top: 10px; text-align: left;">
                            <span><strong>Email Người Đặt:</strong></span>
                            <input type="text" name="" class="form" style="width: 100%" placeholder="Email" value="{{ Auth::user()->email}}">
                        </div>

                        <div class="col-md-12" style="margin-top: 10px; text-align: left;">
                            <span><strong>Số Điện Thoại Người Đặt:</strong></span>
                            <input type="text" name="dp_sdt" class="form" style="width: 100%" placeholder="Số Điện Thoại">
                        </div>

                        
                        
                        <div class="col-md-12" style="margin-top: 10px; text-align: left;">
                              <span><strong>Ghi Chú:</strong></span>
                              <textarea name="dp_ghichu" class="form textarea"  placeholder="Nội dung bài đăng" style="width: 100%">{{old('dp_ghichu')}}</textarea>
                        </div>


                        <div class="col-md-12" style="margin-top: 10px">
                            <button type="submit" id="submit" name="submit" class="text-center form-btn" style="width: 100%; background-color: #50a900">Đặt Xem Phòng</button>
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
                </div>
            </div>
          </form>
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
        </body>
    </html>