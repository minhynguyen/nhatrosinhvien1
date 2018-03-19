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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
            type="text/javascript"></script>
  <style>
  #map-canvas{
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
                    <!-- <div class="col-md-12"> -->
                        <h1 style="font-family: Time new romance">Thông Tin Tài Khoản</h1>
                        <!-- <div class="fa fa-user fade-2x"></div> -->
                        <!-- <div class="col-lg-12 col-sm-12"> -->
                          <div class="card hovercard">
                              <div class="card-background">
                              </div>
                              <div class="useravatar">
                                  <img alt="" src="{{ asset ('theme/homepage/image/avatar.png' )}}">
                              </div>
                              <div class="card-info" style="padding-top: 5px"> <span class="card-title">{{ Auth::user()->name }}</span>

                              </div>
                          </div>
                          <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                              <div class="btn-group" role="group">
                                  <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                      <div class="hidden-xs">Thông Tin Tài Khoản</div>
                                  </button>
                              </div>
                              <div class="btn-group" role="group">
                                  <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                      <div class="hidden-xs">Quản Lý Nhà Trọ</div>
                                  </button>
                              </div>
                              <div class="btn-group" role="group">
                                  <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                      <div class="hidden-xs">Quản Lý Bài Đăng</div>
                                  </button>
                              </div>
                              <div class="btn-group" role="group">
                                  <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                      <div class="hidden-xs">Đăng Tin Mới</div>
                                  </button>
                              </div>
                          </div>

                          <div class="well">
                        <div class="tab-content">
                          <div class="tab-pane fade in active" id="tab1">
                            <p class="desc-text">Name: {{ Auth::user()->name }}</p>
                          <p class="desc-text">Email: {{ Auth::user()->email }}</p>
                          @if (Auth::user()->level === 1)
                          <p class="desc-text">Loại Tài Khoản: <span class="badge">Admin</span></p>
                        
                          @else
                              <p class="desc-text">Loại Tài Khoản: <span class="badge">MemBer</span></p>
                          @endif
                          </div>
                          <div class="tab-pane fade in" id="tab2">
                            <h3>Thông Tin Nhà Trọ</h3>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-list">
                                <thead>
                                  <tr>
                                      <th>Mã Nhà Trọ</th>
                                      <th>Tên Nhà Trọ</th>
                                      <th>Địa Chỉ</th>
                                      <th>Thông Tin</th>
                                      <th>Giá Điện</th>
                                      <th>Giá Nước</th>
                                      <th>Trạng Thái</th>
                                      <th style="text-align: center;"><a class="btn btn-default" href="{{ route('nhatrofrontend.create') }}"><em class="fa fa-plus"></em>Thêm Nhà Trọ</a></th>
                                  </tr> 
                                </thead>
                                <tbody>
                                        @foreach ($dsnhatro as $ds)
                                        <tr>
                                          <td style="text-align: left;">{{$ds->nt_ma}}</td>
                                          <td style="text-align: left;">{{$ds->nt_ten}}</td>
                                          <td style="text-align: left;">{{$ds->nt_diachi}}</td>
                                          <td style="text-align: left;">{{$ds->nt_thongtin}}</td>
                                          <td style="text-align: left;">{{$ds->nt_giadien}}</td>
                                          <td style="text-align: left;">{{$ds->nt_gianuoc}}</td>
                                          <td style="text-align: left;">{{$ds->nt_trangthai}}</td>

                                          <td align="center">
                                            <a class="btn btn-default" href="{{ route('nhatrofrontend.edit', ['nhatro' => $ds->nt_ma]) }}"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger" href="{{ route('nhatrofrontend.show', ['nhatro' => $ds->nt_ma]) }}"><em class="fa fa-eye"></em></a>
                                            
                                          </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                              </table>
                            </div>
                            <h3><a href="{{ route('nhatrofrontend.create') }}"> Nếu Bạn Chưa Đăng Kí Nhà Trọ. Hãy Nhấn Vào Đây Để Đăng Kí Nhà Trọ Miễn Phí.</h3></a>
                          </div>
                          
                          <div class="tab-pane fade in" id="tab3">
                            <h3>Tất Cả Các Bài Đăng</h3>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-list">
                                <thead>
                                  <tr>
                                      <th style="text-align: center;">Mã</th>
                                      <!-- <th style="text-align: left;">Tên Người Đăng</th> -->
                                      <th style="text-align: left;">Tên Nhà Trọ</th>
                                      <th style="text-align: left;">Loại Bài Đăng</th>
                                      <th style="text-align: left;">Tiêu Đề</th>
                                      <th style="text-align: left;">Nội Dung</th>
                                      <th style="text-align: center;">Ngày Đăng</th>
                                      <th style="text-align: center;">Trạng Thái</th>
                                      
                                      
                                      
                                  </tr> 
                                </thead>
                                <tbody>
                                   @foreach ($dsbaidang as $baidang)
                                        <tr>
                                          <td>{{$baidang->bd_ma}}</td>
                                          <!-- <td style="text-align: left;">{{$baidang->name}}</td> -->
                                          <td style="text-align: left;">{{$baidang->nt_ten}}</td>
                                          <td style="text-align: left;">{{$baidang->lbd_ten}}</td>
                                          <td style="text-align: left;">{{$baidang->bd_tieude}}</td>
                                          <td style="text-align: left;">{{$baidang->bd_noidung}}</td>
                                          <td style="text-align: center;">{{$baidang->bd_taomoi}}</td>
                                          
                                          @if ($baidang->bd_trangthai === 2)

                                              <td style="text-align: center;"><span class="badge" style="background-color: orange">Chờ Duyệt</span></td>
                                          @else
                                              <td style="text-align: center;"><span class="badge" style="background-color: green">Đã Duyệt</span></td>
                                          @endif
                                          
                                          
                                        </tr>
                                      </tbody>
                                      @endforeach
                              </table>
                            </div>
                          </div>


                          <div class="tab-pane fade in" id="tab4">
                            <h3>Danh Sách Các Bài Đăng Chờ Duyệt</h3>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-list">
                                <thead>
                                  <tr>
                                      <th style="text-align: center;">Mã</th>
                                      <!-- <th style="text-align: left;">Tên Người Đăng</th> -->
                                      <th style="text-align: left;">Tên Nhà Trọ</th>
                                      <th style="text-align: left;">Loại Bài Đăng</th>
                                      <th style="text-align: left;">Tiêu Đề</th>
                                      <th style="text-align: left;">Nội Dung</th>
                                      <th style="text-align: left;">Ngày Đăng</th>
                                      <th style="text-align: left;">Trạng Thái</th>
                                      
                                      <th style="text-align: center;"><a class="btn btn-default" href="{{ route('baidangfrontend.create') }}"><em class="fa fa-plus"></em>Thêm Bài Đăng</a></th>
                                  </tr> 
                                </thead>
                                <tbody>
                                   @foreach ($dsbaidangcho as $baidangcho)
                                        <tr>
                                          <td>{{$baidangcho->bd_ma}}</td>
                                          <!-- <td style="text-align: left;">{{$baidangcho->name}}</td> -->
                                          <td style="text-align: left;">{{$baidangcho->nt_ten}}</td>
                                          <td style="text-align: left;">{{$baidangcho->lbd_ten}}</td>
                                          <td style="text-align: left;">{{$baidangcho->bd_tieude}}</td>
                                          <td style="text-align: left;">{{$baidangcho->bd_noidung}}</td>
                                          <td style="text-align: left;">{{$baidangcho->bd_taomoi}}</td>
                                          @if ($baidangcho->bd_trangthai === 2)

                                              <td style="text-align: center;"><span class="badge" style="background-color: orange">Chờ Duyệt</span></td>
                                          @else
                                              <td style="text-align: center;"><span class="badge" style="background-color: green">Đã Duyệt</span></td>
                                          @endif
                                          <td align="center">
                                            <a class="btn btn-default" href="{{ route('baidangfrontend.edit', ['baidang' => $baidangcho->bd_ma]) }}"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger" href="{{ route('nhatrofrontend.show', ['baidang' => $baidang->bd_ma]) }}"><em class="fa fa-eye"></em></a>
                                            
                                          </td>
                                          
                                        </tr>
                                      </tbody>
                                      @endforeach
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
    
                    </div>
              
                        <!-- <div class="col-md-12" style="margin-top: 10px">
                          <p class="desc-text">Name: {{ Auth::user()->name }}</p>
                          <p class="desc-text">Email: {{ Auth::user()->email }}</p>
                          @if (Auth::user()->level === 1)
                          <p class="desc-text">Loại Tài Khoản: <span class="badge">Admin</span></p>
                        
                          @else
                              <p class="desc-text">Loại Tài Khoản: <span class="badge">MemBer</span></p>
                          @endif
                          <!<p class="desc-text">Loại Tài Khoản: {{ Auth::user()->level }}</p> -->
                          
                            
                        </div>


                        


                       
                       
                        
                        

                        
                    </div>
                </div>
              </div>
                    <!-- <div class="col-md-6">
                        <h1 style="font-family: Time new romance">Quản Trị Nhà Trọ</h1>
                        <div class="fa fa-user fa-2x"></div>
                        <div>
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                            <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                          </ul>

                          <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                              <h3>HOME</h3>
                              <p>Some content.</p>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                              <h3>Menu 1</h3>
                              <p>Some content in menu 1.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                              <h3>Menu 2</h3>
                              <p>Some content in menu 2.</p>
                            </div>
                          </div>
                        </div>
                        <div class="img-section">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <div class="img-section-space"></div>
                           <img src="{{ asset ('theme/homepage/image/pic3.jpg' )}}"  width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic4.jpg' )}}"  width="250" height="220">
                       </div>
                       <! <div class="fa fa-file-photo-o fa-2x" > Hình Ảnh Nhà Trọ</div> -->
                    <!-- </div> -->
                    

                  
                  </div>

                  
                      
                  <!-- </div> -->
                  






            <!-- </div> -->
            
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
            <!-- <script src="{{ asset ('theme/homepage/ckeditor/ckeditor.js') }}"></script> -->
            <!-- <script>CKEDITOR.replace('editor1');</script> -->
            <!-- <script>


                var map = new google.maps.Map(document.getElementById('map-canvas'),{
                  center:{
                        lat: 10.031450,
                        lng: 105.768872
                  },
                  zoom:16,
                  zoomControl: false,
                  streetViewControl: false,
                  scrolwheel : true
                });

                var marker = new google.maps.Marker({
                  position: {
                    lat: 10.031450,
                    lng: 105.768872
                  },
                  map: map,
                  draggable: true
                });



                


                

              </script> -->
  </body>
</html>