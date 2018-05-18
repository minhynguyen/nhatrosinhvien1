    <!DOCTYPE html>
    <html>

         <head>
            <meta charset="UTF-8">
            <title>Nhà Trọ Sinh Viên</title>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/show.css') }}">
            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
            <!-- <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap.css') }}"> -->
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/style-portfolio.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/picto-foundry-food.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/jquery-ui.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
            <link rel="stylesheet" src="{{ asset ('js/bootstrap.min.js') }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="{{ asset ('theme/homepage/css/font-awesome.min.css') }}" rel="stylesheet">
            <link rel="icon" href="{{ asset ('theme/homepage/image/icon.ico') }}" type="image/x-icon">
            <link rel="stylesheet" href="{{url('css/dropzone.css')}}">
            
  
<style>


.card {
  position: relative;
  background: #fff;
  max-width: 500px;
  margin: 20px auto;
  box-shadow: 0px 0px 30px 2px #000;
}
.card .header {
  background: url("{{ asset ('theme/homepage/image/banner6.png') }}") no-repeat center;
  background-size: cover;
  min-height: 350px;
}

.card .header1 {
  background: url("{{ asset ('theme/homepage/image/anh2.jpg') }}") no-repeat center;
  background-size: cover;
  min-height: 350px;
}


.card .header .icon a .fa-heart-o {
  position: absolute;
  left: 85%;
  bottom: 30.7%;
  background: #17BEBB;
  color: #fff;
  font-size: 1.3em;
  font-weight: bold;
  padding: 15px;
  border-radius: 50%;
  box-shadow: 0px 5px 30px 1px #17BEBB;
}

.card .text .fa-clock-o {
  color: #9B9B9B;
  margin: 0 30px;
}
.card .text .fa-users {
  color: #9B9B9B;
}


 


.helpr-section {
    height: 65%;
    background: #655f58 url('{{ asset ('theme/homepage/image/bantop.jpg') }}');
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
            <section id="home" class="helpr-section helpr-layout-1 section section-inverse-color" >
            <div class="container">
              <div class="webHomeTitle">
                <h2 class="helpr-title">Đăng Tin Cho Thuê</h2>
              </div>
            </div>
          </section>
        <form name="frmTruong" method="POST" action="{{route('baidangfrontend.update', ['baidang'=> $baidang->bd_ma]) }}"> <!-- action tu controller -->
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
            <div class="description_content">
                <div class="text-content container">
                    @if($errors->any())
                      <div class="alert alert-danger" style="background-color: red; text-align: left;">
                        <ul>
                          <!-- hàm validate trong lar hỗ trợ biến errors -->
                          @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                    <div class="col-md-6">
                      <div id='nz-div-2' style="margin-top: -15px;">
                          <h3 class="tde" style="margin-left:-350px !important">         
                               <span>Cập Nhật Bài Đăng</span>
                          </h3>
                        <hr>
                      </div>
                        <!-- <h1 style="font-family: Time new romance">Cập Nhật Bài Đăng</h1>
                        <div class="fa fa-tasks fa-2x"></div> -->
                        <div class="panel panel-success" style="margin-top: -35px">
                        <div class="panel-body">
                          @if($errors->any())
                          <div class="alert alert-danger" style="background-color: #EA3A3C; text-align: left; margin-top: 5px;">
                            <ul>
                              @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                              @endforeach
                            </ul>
                          </div>
                          @endif
                        
                      
                        <div class="col-md-12" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Chọn Loại Bài Đăng"> -->
                            <select class="form" style="width: 100%" name="lbd_ma">
                                      <option value="" disabled selected>Chọn Loại Bài Đăng</option>
                                      @foreach($dsloaibaidang as $lbd)
                                        <option value="{{$lbd->lbd_ma}}" <?php echo ($lbd->lbd_ma == $baidang->lbd_ma) ? 'selected' : ''  ?>>{{$lbd->lbd_ten}}</option>
                                      @endforeach      
                            </select>
                        </div>

                       

                        



                        <div class="col-md-12" style="margin-top: 10px">
                          <!-- <div class="fa fa-home fa-2x"> Thông Tin Nhà Trọ</div> -->
                            <input type="text" name="bd_tieude" class="form" style="width: 100%" placeholder="Tiêu đề bài đăng" value="{{$baidang->bd_tieude}}">
                        </div>

                        <!-- <div class="col-md-12" style="margin-top: 10px">
                            <input type="text" name="nt_ten" class="form" style="width: 100%" placeholder="Nội dung bài đăng" value="{{old('bd_noidung')}}">
                        </div> -->


                        <div class="col-md-12" style="margin-top: 10px">
                          

                            <textarea id="editor1" name="bd_noidung" rows="10" cols="80" style="width: 100%">
                              {{$baidang->bd_noidung}}
                            </textarea>
                        </div>

                        <div class="col-md-12" style="margin-top: 10px">
                            <button type="submit"  class="text-center form-btn" style="width: 100%; background-color: #00b9a0"><li class="fa fa-paper-plane"> </li> Đăng Bài</button>
                        </div>

                      </div>
                    </div>

                        <div class="col-md-12" style="margin-top: 10px">
                          

                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            
                        </div>
                        

                        
                    </div>
                    <div class="col-md-6" style="margin-top: -90px;">
                        <div class="offer offer-success">
                          <div class="offer-content">
                             <div class="card">
                               <div class="header">
                                  <div class="icon">
                                  <a href=""><i class="fa fa-heart-o"></i></a>
                                  </div>
                               </div>

                               <div class="text">
                                  <h2 class="food">
                                     Đăng Tin Cho Thuê
                                  </h2>
                                </div>
                               

                              <div class="header1">
                                  <div class="icon">
                                  <a href=""><i class="fa fa-heart-o"></i></a>
                                  </div>
                               </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    


                    

                    
                  </form>

                    


                </div>
            </div>
            <footer class="sub_footer" style="margin-top: 25px">
                <div class="container">
                    <div class="social_heading" style="font-family: time new romance; margin-top: 5px">Hệ Thống Quản Lý Nhà Trọ Sinh Viên</div>
                </div>
            </footer>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.min.js') }}"> </script>
            <!-- <script type="text/javascript" src="{{ asset ('theme/homepage/js/upload.js') }}"> </script> -->
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/bootstrap.min.js') }}" ></script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.js') }}"></script>     
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery.mixitup.min.js') }}" ></script>
            <script src="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/upload-image.js') }}"></script>
            <script src="{{ asset ('theme/homepage/ckeditor/ckeditor.js') }}"></script>
            <script>CKEDITOR.replace('editor1');</script>

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