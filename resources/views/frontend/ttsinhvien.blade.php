    <!DOCTYPE html>
    <html>

         <head>
            <meta charset="UTF-8">
            <title>Quản Lý Tài Khoản</title>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/show.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/footer.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/thongtin.css') }}">
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
            <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
            <link rel="stylesheet" src="{{ asset ('js/bootstrap.min.js') }}">
            <link rel="icon" href="{{ asset ('theme/homepage/image/icon.ico') }}" type="image/x-icon">
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
            type="text/javascript"></script>
  <style>
  #map-canvas{
    width: 100%;
    height: 290px;}

    .panels .panel.panel1 {
  background-image: url("{{ asset ('theme/homepage/image/tt3.jpg') }}");
}
.panels .panel.panel2 {
  background-image: url("{{ asset ('theme/homepage/image/tt1.jpg') }}");
}
.panels .panel.panel3 {
  background-image: url("{{ asset ('theme/homepage/image/bantop10.jpg') }}");
}
.panels .panel.panel4 {
  background-image: url("{{ asset ('theme/homepage/image/tt2.jpg') }}");
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
                                                <!-- <li>
                                                    <a href="{{ route('changePassword1') }}" target="_blank">Đổi Mật Khẩu
                                                    </a>
                                                </li> -->
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

            <div class="panels">
                <div class="panel panel1">
                  <p></p>
                  <p></p>
                  <p></p>
                </div>
                <div class="panel panel2">
                  <p></p>
                  <p></p>
                  <p></p>
                </div>
                <div class="panel panel3">
                  <p></p>
                  <p></p>
                  <p></p>
                </div>
                <div class="panel panel4">
                  <p></p>
                  <p></p>
                  <p></p>
                </div>
              </div>
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

          @if(session()->has('alert-success'))
              <div class="alert alert-success">
                  {{ session()->get('alert-success') }}
              </div>
          @endif 

          @if(session()->has('alert-error'))
              <div class="alert alert-danger">
                  {{ session()->get('alert-error') }}
              </div>
          @endif 
            <div class="col-md-12">
              <div id='nz-div-2'>
                <h3 class="tde">         
                     <span>Quản Lý Tài Khoản</span>
                </h3>
                <hr>
              </div>
            </div>

            <div class="container">
            <div class="row">
                      <div class="row">
                        
                          <div class="col-md-4 text-center">
                            <div class="offer offer-success">
                            <div class="offer-content">
                              <div class="box" style="background-color: #e0eceb">
                                  <div class="box-content" style="text-align: left !important;">
                                      <h2 class="tag-title" style="text-align: center; !important;">Thông Tin Cá Nhân</h2>
                                      <hr />
                                      <p><strong>Tên hiển thị:</strong> {{ Auth::user()->name }}</p>
                                      <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                      @if (Auth::user()->loai === 1)
                                      <p><strong>Loại Tài Khoản:</strong> <span class="badge">Sinh Viên</span></p>
                                    
                                      @else
                                          <p><strong>Loại Tài Khoản:</strong> <span class="badge">Chủ Nhà Trọ</span></p>
                                      @endif
                                      @foreach($hoc as $h)
                                        <p><strong>Trường:</strong> {{ $h->t_ten }}</p>          
                                        @endforeach 
                                        @foreach($o as $ot)
                                            <p><strong>Nhà Trọ Đã Lưu:</strong> {{ $ot->nt_ten }}</p>          
                                        @endforeach 
                                      
                                      <br />
                                      
                                      @if ($count === 0)
                                      <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#myModal">Cập Nhật Trường</button>
                                      @endif

                                      <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#myModal2">Đổi Mật Khẩu</button>
                                  </div>
                              </div>
                            </div>
                          </div>
                          </div>


                          <div class="col-md-8">
                            <div class="col-md-12">
                              <div id='nz-div-3' style="margin-top: -15px;">
                                <h3 class="tde" style="margin-left:0px !important">         
                                     <span>Quản Lý Bài Đăng</span>
                                </h3>
                              <hr>
                              </div>
                              <table class="table table-striped table-bordered table-list">
                              <thead>
                                  <tr>
                                      <th style="text-align: center;">STT</th>
                                      <th style="text-align: left;">Tên Nhà Trọ</th>
                                      <th style="text-align: left;">Tiêu Đề</th>
                                      <th style="text-align: center;">Ngày Đăng</th>
                                      <th style="text-align: center;">Trạng Thái</th>
                                      <th colspan="2"><a class="btn btn-info" href="{{ route('dangtin') }}"><em class="fa fa-plus"></em>Thêm Bài Đăng</a></th>
                                  </tr> 
                                </thead>
                              <tbody>
                               @foreach ($dsbaidang as $baidang)
                                        <tr>
                                          <td style="text-align: center;">{{ $loop->index + 1}}</td>
                                          <td style="text-align: left;">{{$baidang->nt_ten}}</td>
                                          <td style="text-align: left;">{{$baidang->bd_tieude}}</td>
                                          <td style="text-align: center;">
                                            <?php \Carbon\Carbon::setLocale('vi')  ?>
                                           {{ \Carbon\Carbon::createFromTimeStamp(strtotime($baidang->bd_taomoi  ))->diffForHumans() }}
                                         </td>
                                          
                                          @if ($baidang->bd_trangthai === 2)

                                              <td style="text-align: center;"><span class="badge" style="background-color: orange">Chờ Duyệt</span></td>
                                          @else
                                              <td style="text-align: center;"><span class="badge" style="background-color: green">Đã Duyệt</span></td>
                                          @endif
                                          <td align="center">
                                            <a class="btn btn-default" href="{{ route('baidangfrontend.edit', ['baidang' => $baidang->bd_ma]) }}"><em class="fa fa-pencil"></em></a>
                                            </td>
                                            <td>

                                            <form method="POST" action="{{route('sinhvien.destroy', ['sinhvien' => $baidang->bd_ma])}}">
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}

                                              <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></button>
                                            </form>
                                          </td>
                                          
                                          
                                        </tr>


                                        @endforeach
                              </tbody>
                            </table>
                            <div style="text-align: right;">
                            {{ $dsbaidang->render() }}
                            </div>

                            </div>

                            <div class="col-md-12">
                              <div id='nz-div-3' style="margin-top: -15px;">
                                <h3 class="tde" style="margin-left:0px !important">         
                                     <span>Quản Lý Nhà Trọ Đã Lưu</span>
                                </h3>
                              <hr>
                              </div>
                              <table class="table table-striped table-bordered table-list">
                              <thead>
                                  <tr>
                                      <th style="text-align: center;">STT</th>
                                      <th style="text-align: left;">Tên Nhà Trọ</th>
                                      <th style="text-align: left;">Địa Chỉ</th>
                                      <th></th>
                                  </tr> 
                                </thead>
                              <tbody>
                               @foreach($o as $ot)
                                        <tr>
                                          <td style="text-align: center;">{{ $loop->index + 1}}</td>
                                          <td style="text-align: left;">{{$ot->nt_ten}}</td>
                                          <td style="text-align: left;">{{$ot->nt_diachi}}</td>
                                          
                                          <td>
                                            <a class="btn btn-danger" href="{{ route('sinhvien.show', ['o' => $ot->nt_ma]) }}"><em class="fa fa-trash"></em></a>
                                            
                                          </td>
                                          
                                          
                                          
                                        </tr>


                                        @endforeach
                                        </tbody>
                                      </table>
                                      <div style="text-align: right;">
                                      {{ $o->render() }}
                                      </div>

                                      </div>
                            
                            
                            
                          </div>

                         
                      </div>           
                  </div>
            </div>
</div>






                          
<div style="margin-top: 20px; margin-bottom: 20px">
        <div class="modal fade" id="myModal" role="dialog" style="margin-top: 110px;">
        <div class="modal-dialog">

        <!-- Modal content-->
         <form name="frmnhatro" method="POST" action="{{ route('sinhvien.store') }}" enctype="multipart/form-data">

                {{ csrf_field() }}    
        <div class="modal-content">
          <div class="modal-header" style="background-color: #00846b">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">Chọn Trường Đại Học</h5>
          </div>
          
          <div class="modal-body">
            
          
            <select class="form-control" style="width: 100%" name="t_ma">
                @foreach($dstruong as $t)
                  <option value="{{$t->t_ma}}">{{$t->t_ten}}</option>
                @endforeach 
                            
            </select>

          </div>

           
          
          <div class="modal-footer">
            
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info" >Save</button>
            
          </div>

          
        </div>
         </form>


        </div>
        </div>
</div>


              <div style="margin-top: 20px; margin-bottom: 20px">
                  <div class="modal fade" id="myModal2" role="dialog" style="margin-top: 110px;">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form  method="POST" action="{{ route('changePassword') }}">
                              {{ csrf_field() }}
                          <div class="modal-header" style="background-color: #00846b">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Đổi Mật Khẩu </h5>
                          </div>
                                
                          <!-- <div class="modal-body"> -->
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

                          <!-- </div> -->
                          <div class="modal-footer">
                                
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info" >Save</button>
                            
                          </div>

                              </div>
                               
                              </form>
                              
                            </div>
                            
                          </div>
                        </div>
                           
                          
                        </div>
                      </div>
    
                    </div>
              
                    
                          
                            
                        </div>


                        


                       
                       
                        
                        

                        
                    </div>
                </div>
              </div>
   

                 
            
            
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