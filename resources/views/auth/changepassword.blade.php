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
            
      </head>
     

        <body>

           
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ route('index')}}" style="margin-left: -50px; padding-top: 20px">NhàTrọSinhViên</a>
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
                                <!-- <li>
                                    <a class="color_animation" href="">Đăng Nhập</a>
                                </li> -->
                                <!-- <li>
                                    <a class="color_animation" href="{{ route('register')}}" style="margin-left: 2px!important"> Đăng Kí</a>
                                </li> -->
                                <ul class="nav navbar-nav navbar-right">
                                            <li class="dropdown" >
                                              <a href="" class="dropdown-toggle"  data-toggle="dropdown" style="color: white" >{{ Auth::user()->name }} <span class="caret"></span></a>
                                              <ul class="dropdown-menu" role="menu">
                                                
                                                <li><a href="{{ route('profile') }}" target="_blank">Thông Tin Tài Khoản</a></li>
                                                <li><a href="{{ route('nhatrofrontend.create') }}" target="_blank">Đăng Kí Nhà Trọ</a></li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="{{ route('changePassword1') }}">
                                                       Đổi Mật Khẩu
                                                    </a>
                                                </li>
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
                            </ul>
                      
                            
                        </div><!-- /.navbar-collapse -->
                    </div>

                </div><!-- /.container-fluid -->
            </nav>
             
            

            <div class="description_content">
                
                <div class="text-content container">
                    <div class="col-md-6">
                        <h1 style="font-family: Time new romance">Đổi Mật Khẩu</h1>
                        <div class="fa fa-users fa-2x"></div>
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif  
                      <form  method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}

                        <div class="col-md-12" style="margin-top: 10px">
                            
                                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <input id="current-password" type="password" class="form" name="current-password" style="width: 100%" required placeholder="Nhập Mật Khẩu Cũ">

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-top: 10px">
                            
                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                
                                <input id="new-password" type="password" class="form" name="new-password" required style="width: 100%" placeholder="Nhập Mật Khẩu Mới">
 
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                              </div>
                        </div>
                    <div class="col-md-12" style="margin-top: 10px">
                        <div class="form-group">
                                <input id="new-password-confirm" type="password" class="form" name="new-password_confirmation" required placeholder="Xác Nhận Mật Khẩu" style="width: 100%">
                            
                        </div>
                    </div>
                        
                        <div class="col-md-6" style="margin-top: 10px">
                            
                        </div>
                        <div class="col-md-12" style="margin-top: 10px">
                            <button type="submit" id="submit" name="submit" class="text-center form-btn" style="width: 100%; background-color: #50a900">Đổi Mật Khẩu</button>
                        </div>

                        </form>
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