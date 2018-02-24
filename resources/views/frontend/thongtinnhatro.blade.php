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
                    <div class="col-md-6">
                        <h1 style="font-family: Time new romance">Tên Nhà Trọ</h1>
                        <div class="fa fa-home fa-2x"> Thông Tin Tổng Quan</div>
              
                        <div class="col-md-12" style="margin-top: 10px">
                          <p class="desc-text">Tên Chủ Trọ:</p>
                          <p class="desc-text">Số Điện Thoại Liên Lạc:</p>
                          <p class="desc-text">Địa Chỉ: </p>
                          <p class="desc-text">Giá Cho Thuê: </p>
                          <p class="desc-text">Giá Điện: </p>
                          <p class="desc-text">Giá Nước: </p>
                          <p class="desc-text">Nội Dung: </p>
                            
                        </div>

                        <div class="col-md-12" style="margin-top: 10px">
                          <div class="fa fa-cogs fa-2x" > Tiện ích phòng trọ</div>
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                              <hr>
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                              <label><input type="checkbox" value="">Option 1</label>
                            </div>
                            </div>
                        </div>


                        <div class="col-md-12" style="margin-top: 10px">
                          <div class="fa fa-cubes fa-2x" > Thông Tin Bổ Sung</div>
                           <p class="desc-text">Nội Dung:
                            Cho thuê phòng trọ quận Phú Nhuận
                            Địa chỉ: 96/1/17 Phan Đình Phùng P2 Quận Phú Nhuận TP.HCM 
                            Phòng diện tích 3 x 3 , sạch đẹp thoáng mát . 
                            Internet , truyền hình cáp , chỗ để xe .Không nấu ăn , không về trễ quá 11h đêm , toalet dùng chung
                            Giá : 1.800.000 đồng/tháng 
                            Liên hệ : cô Nghĩa 02838459496 hoặc 0961288624.

                            </p>
                        </div>
                        <div class="col-md-12" style="margin-top: 10px">
                          <div class="fa fa-comment fa-2x" > Đánh Giá/ Bình Luận</div>
                           
                          <div class="panel panel-info">
                                      <div class="panel-body">
                                          <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
                                          <form class="form-inline">
                                              <button class="btn btn-primary pull-right" type="button">Gửi Bình Luận</button>
                                          </form>
                                      </div>
                          </div>
                        

                       
                        
                        </div>
                        <div class="col-md-6" style="margin-top: 10px">
                            
                        </div>
                        

                        
                    </div>
                    <div class="col-md-6">

                        <div class="img-section">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <div class="img-section-space"></div>
                           <img src="{{ asset ('theme/homepage/image/pic3.jpg' )}}"  width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic4.jpg' )}}"  width="250" height="220">
                       </div>
                       <div class="fa fa-file-photo-o fa-2x" > Hình Ảnh Nhà Trọ</div>
                    </div>
                    <div class="col-md-6" style="margin-top: 10px">
                      <!-- <label>Kéo thả vị trí trên bản đồ để chỉnh địa điểm chính xác hơn</label> -->
                        <div id="map-canvas"></div>
                        <div class="fa fa-map-marker fa-2x" > Sơ Đồ Nhà Trọ</div>

                    </div>

                    <div class="col-md-6" style="margin-top: 10px">
                      <div class="fa fa-comments fa-2x" > Bình Luận Về Nhà Trọ</div>
                      <div class="comments-list">
                         <div class="media">
                             <p class="pull-right"><small>5 days ago</small></p>
                              
                              <div class="media-body">
                                  
                                <h4 class="media-heading user_name">Baltej Singh</h4>
                                Wow! this is really great.
                                
                                
                              </div>
                            </div>
                         
                         
                         <div class="media">
                             <p class="pull-right"><small>5 days ago</small></p>
                              
                              <div class="media-body">
                                  
                                <h4 class="media-heading user_name">Baltej Singh</h4>
                                Wow! this is really great.
                                
                                
                              </div>
                            </div>
                     </div>

                    </div>
                    
                   

                   

                   


                    

                    <!-- <div class="col-md-12" style="margin-top: 10px">
                            <button type="submit" id="submit" name="submit" class="text-center form-btn" style="width: 100%; background-color: #50a900"><li class="fa fa-paper-plane"> </li> Đặt Giữ Chỗ</button>
                    </div> -->
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
            <script src="{{ asset ('theme/homepage/upload-image.js') }}"></script>
            <!-- <script src="{{ asset ('theme/homepage/ckeditor/ckeditor.js') }}"></script> -->
            <!-- <script>CKEDITOR.replace('editor1');</script> -->
            <script>


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



                


                

              </script>
  </body>
</html>