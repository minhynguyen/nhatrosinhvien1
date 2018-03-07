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
  /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    /*padding-top: 5px*/
    font-size: 20px;
    line-height: 1;
    /*color: #262626;*/
    color: red;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}



</style>

            
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
                            <ul class="nav navbar-nav main-nav  clear navbar-right ">
                                <li style="padding-right: 30px"><a class="color_animation" href="#">ĐĂNG TIN CHO THUÊ</a></li>
                                <li style="padding-right: 30px"> <a class="color_animation" href="#">QUẢN LÝ TÀI KHOẢN</a></li>
                                <li style="padding-right: 30px"><a class="color_animation" href="#">QUẢN LÝ ĐẶT PHÒNG</a></li>
                                <li style="padding-right: 30px"><a class="color_animation" href="#">KHÔNG GIAN</a></li>
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
            

            <div class="description_content">
                <div class="text-content container">
                    <!-- <div class="col-md-12"> -->
                        <h1 style="font-family: Time new romance">Thông Tin Tài Khoản</h1>
                        <!-- <div class="fa fa-user fade-2x"></div> -->
                        <div class="col-lg-12 col-sm-12">
                          <div class="card hovercard">
                              <div class="card-background">
                                  <!-- <img class="card-bkimg" alt="" src="{{ asset ('theme/homepage/image/info.jpg' )}}" > -->
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
                            <!-- <h3></h3> -->
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-list">
                                <thead>
                                  <tr>
                                      <th class="hidden-xs">Tên Nhà Trọ</th>
                                      <th>Loại Nhà Trọ</th>
                                      <th>Địa Chỉ</th>
                                      <th>Thông Tin</th>
                                      <th>Giá Điện</th>
                                      <th>Giá Nước</th>
                                      <th>Trạng Thái</th>
                                      <th style="text-align: center;"><a class="btn btn-default" href="{{ route('themnhatro') }}"><em class="fa fa-plus"></em>Thêm Nhà Trọ</a></th>
                                  </tr> 
                                </thead>
                                <tbody>
                                        <tr>
                                          
                                          <td class="hidden-xs"></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td align="center">
                                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                          </td>
                                        </tr>
                                      </tbody>
                              </table>
                            </div>
                            <h3><a href="{{ route('themnhatro') }}"> Nếu Bạn Chưa Đăng Kí Nhà Trọ. Hãy Nhấn Vào Đây Để Đăng Kí Nhà Trọ Miễn Phí.</h3></a>
                          </div>
                          <div class="tab-pane fade in" id="tab3">
                            <h3>This is tab 3</h3>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-list">
                                <thead>
                                  <tr>
                                      <th class="hidden-xs">Tên Nhà Trọ</th>
                                      <th>Loại Nhà Trọ</th>
                                      <th>Địa Chỉ</th>
                                      <th>Thông Tin</th>
                                      <th>Giá Điện</th>
                                      <th>Giá Nước</th>
                                      <th>Trạng Thái</th>
                                      <th style="text-align: center;"><a class="btn btn-default" href="{{ route('themnhatro') }}"><em class="fa fa-plus"></em>Thêm Nhà Trọ</a></th>
                                  </tr> 
                                </thead>
                                <tbody>
                                        <tr>
                                          
                                          <td class="hidden-xs"></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td align="center">
                                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                          </td>
                                        </tr>
                                      </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade in" id="tab4">
                            <h3>This is tab 3</h3>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-list">
                                <thead>
                                  <tr>
                                      <th class="hidden-xs">Tên Nhà Trọ</th>
                                      <th>Loại Nhà Trọ</th>
                                      <th>Địa Chỉ</th>
                                      <th>Thông Tin</th>
                                      <th>Giá Điện</th>
                                      <th>Giá Nước</th>
                                      <th>Trạng Thái</th>
                                      <th style="text-align: center;"><a class="btn btn-default" href="{{ route('themnhatro') }}"><em class="fa fa-plus"></em>Thêm Nhà Trọ</a></th>
                                  </tr> 
                                </thead>
                                <tbody>
                                        <tr>
                                          
                                          <td class="hidden-xs"></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td align="center">
                                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                          </td>
                                        </tr>
                                      </tbody>
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