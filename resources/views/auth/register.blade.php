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
                                    
                                </li>
                                <li>
                                   
                                </li>
                                <li>
                                    
                                </li>
                                <li>
                                    
                                </li>
                                <li>
                                    
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
             
            

            <div class="description_content">
                <div class="text-content container">
                  <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <h1 style="font-family: Time new romance">Đăng Kí</h1>
                        <div class="fa fa-home fa-2x"></div>
                        <div class="col-md-6">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Họ Và Tên"> -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input id="name" type="text" class="form" name="name" style="width: 100%" placeholder="Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Email"> -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="form" name="email" value="{{ old('email') }}" required style="width: 100%" placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <!-- </div> -->
                          </div>
                        </div>

                        <!-- <div class="col-md-6" style="margin-top: 10px">
                            <input type="text" name="" class="form" style="width: 100%" placeholder="Số Điện Thoại">
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            <input type="text" name="" class="form" style="width: 100%" placeholder="Địa Chỉ">
                        </div> -->

                        <div class="col-md-6" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Mật Khẩu"> -->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            
                                <input id="password" type="password" class="form" name="password" required placeholder="Pass" style="width: 100%">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Xác Nhận Mật Khẩu"> -->
                            <!-- <div class="form-group"> -->
                            <!-- <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

                            <!-- <div class="col-md-6"> -->
                                <input id="password-confirm" type="password" class="form" name="password_confirmation" required style="width: 100%" placeholder="Pass">
                            <!-- </div> -->
                        <!-- </div> -->
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            <button type="submit" id="submit" name="submit" class="text-center form-btn" style="width: 100%; background-color: #50a900">Đăng Kí</button>

                        </div>

                        
                    </div>

                  </form>
                    <div class="col-md-6">
                        <div class="img-section">
                           <img src="{{ asset ('theme/homepage/image/pic1_250.jpg') }}" width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg') }}" width="250" height="220">
                           <div class="img-section-space"></div>
                           <img src="{{ asset ('theme/homepage/image/pic3.jpg') }}"  width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic4.jpg') }}"  width="250" height="220">
                       </div>
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
        </body>
    </html>