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
                            <a class="navbar-brand" href="{{ route('index')}}" style="margin-left: -50px; padding-top: 20px">NhàTrọSinhViên</a>
                        </div>
                        
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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <h2>Thông Tin Nhà Trọ</h2>
                              {{$nhatro->nt_ten}} <br/>
                              {{$nhatro->nt_diachi}}
                            </div>
                          </div>
                          
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
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <h2 style="margin-top: 20px">Danh Sách Đặt Phòng</h2>
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