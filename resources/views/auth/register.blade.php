    <!DOCTYPE html>
    <html>
         <head>
            <meta charset="UTF-8">
            <title>Đăng Kí</title>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/show.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/footer.css') }}">
            <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
            <link rel="stylesheet" src="{{ asset ('js/bootstrap.min.js') }}">
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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q"
  type="text/javascript"></script>
            
      </head>
     <style>


.helpr-section {
    height: 65%;
    background: #655f58 url('{{ asset ('theme/homepage/image/bantop10.jpg') }}');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}
.helpr-text {
    height: 575px;
}

.helpr-title {
    padding: 190px 0 10px;
    font-size: 70px;
    line-height: 80px;
    -webkit-text-shadow: 0 4px 6px rgba(0,0,0,.20);
    -moz-text-shadow: 0 4px 6px rgba(0,0,0,.20);
    text-shadow: 0 4px 6px rgba(0,0,0,.20);
    font-family: 'LatoWebBlack', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-align: center;
    color: #ffffff;
    margin: 0;
    position: relative;
}
.helpr-content {
    position: relative;
    display: table;
    height: 100%;
    width: 100%;
}
.delete1{
  float: left;
}





     </style>

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
                                <li>
                                    <a class="color_animation" href="{{ route('login')}}">Đăng Nhập</a>
                                </li>
                                <li>
                                    <a class="color_animation" href="{{ route('register')}}" style="margin-left: 2px!important"> | Đăng Kí</a>
                                </li>
                            </ul>
                      
                            
                        </div><!-- /.navbar-collapse -->
                    </div>

                </div><!-- /.container-fluid -->
            </nav>
             
            
<section id="home" class="helpr-section helpr-layout-1 section section-inverse-color" >
            <div class="container">
              <div class="webHomeTitle">
                <h2 class="helpr-title">Đăng Kí Tài Khoản</h2>
              </div>
            </div>
          </section>
            <div class="description_content">
                <div class="text-content container" >
                  <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div id='nz-div-2' style="margin-top: -100px;">
                          <h3 class="tde" style="margin-left:-492px !important">         
                               <span>Thông Tin Đăng Kí</span>
                          </h3>
                        <hr>
                      </div>
                      <div class="panel panel-success" style="margin-top: -35px;">
                          <div class="panel-body">
                        <div class="col-md-12" style="margin-top: 20px;">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Họ Và Tên"> -->
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input id="name" type="text" class="form" name="name" style="width: 100%" placeholder="Tên Hiển Thị" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px;">
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



                        

                        

                        <div class="col-md-12" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Mật Khẩu"> -->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form" name="password" required placeholder="Mật Khẩu" style="width: 100%">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <!-- <div class="col-md-6" style="margin-top: 10px"> -->
                            
                                

                            
                            
                            <!-- </div> -->



                        
                        </div>










                        <div class="col-md-12" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Xác Nhận Mật Khẩu"> -->
                            <!-- <div class="form-group"> -->
                            <!-- <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

                            <!-- <div class="col-md-6"> -->
                                <input id="password-confirm" type="password" class="form" name="password_confirmation" required style="width: 100%" placeholder="Xác Nhận Mật Khẩu">
                            <!-- </div> -->
                        <!-- </div> -->
                        </div>

                        <div class="col-md-12" style="margin-top: 20px">
                                <select class="form" name="loai" id="loai" style="width: 100%">
                                      <option value="" disabled selected>Chọn Loại Tài Khoản</option>
                                      <option value="0">Chủ Nhà Trọ</option>
                                      <option value="1">Sinh Viên/ Người Thuê</option>
                                </select>
                        </div>






            

                        <!-- <div class="col-md-6" style="margin-top: 10px">
                            
                        </div> -->


                        <div class="col-md-12" style="margin-top: 15px">
                            <button type="submit"  class="text-center form-btn" style="width: 100%; background-color: ##00b9a0"><li class="fa fa-paper-plane"> </li> Đăng Kí</button>

                        </div>
                      </div>
                    </div>


                        
                    </div>

                  </form>
                  <div class="col-md-2"></div>
                    <!-- <div class="col-md-6">
                        <div class="img-section">
                           <img style="height: 220px; width: 250px !important" src="{{ asset ('theme/homepage/image/anh1.jpg') }}" width="250" height="220">
                           <img style="height: 220px !important" src="{{ asset ('theme/homepage/image/pic4.jpg') }}" width="250" height="220">
                           <div class="img-section-space"></div>
                           <img style="height: 220px !important" src="{{ asset ('theme/homepage/image/pic2.jpg') }}"  width="250" height="220">
                           <img style="height: 220px !important" src="{{ asset ('theme/homepage/image/pic3.jpg') }}"  width="250" height="220">
                       </div>
                    </div> -->
                </div>
            </div>

            <!-- <footer class="sub_footer" style="margin-top: 25px">
                <div class="container">
                    <div class="social_heading" style="font-family: time new romance; margin-top: 5px">Hệ Thống Quản Lý Nhà Trọ Sinh Viên</div>
                </div>
            </footer> -->


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
        </body>
    </html>