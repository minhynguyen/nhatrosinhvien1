    <!DOCTYPE html>
    <html>

         <head>
            <meta charset="UTF-8">
            <title>Nhà Trọ Sinh Viên</title>
            <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
            <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <!-- <link rel="stylesheet" href="{{ asset ('theme/homepage/css/tt.css') }}"> -->
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
            <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
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
                        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav main-nav  clear navbar-right ">
                                <li style="padding-right: 30px"><a class="color_animation" href="#">ĐĂNG TIN CHO THUÊ</a></li>
                                <li style="padding-right: 30px"> <a class="color_animation" href="#">QUẢN LÝ TÀI KHOẢN</a></li>
                                <li style="padding-right: 30px"><a class="color_animation" href="#">QUẢN LÝ ĐẶT PHÒNG</a></li>
                                <li style="padding-right: 30px"><a class="color_animation" href="#">KHÔNG GIAN</a></li>
                                
                            </ul>
                        </div> --><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
            <div class="description_content">
              <div class="text-content container">
                <section id="description">
      <div class="container">
    <div class="row">
          <div class="col-md-7 ">
        <div id="carousel-custom" class="carousel slide left_img" data-ride="carousel">
              <div class="row">
            <div class="col-md-3">
                <ol class="carousel-indicators mCustomScrollbar meartlab">
                  <li data-target="#carousel-custom" data-slide-to="0" class="active">
                     <!-- <img  data-image="yellow" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/26903628_1287758011354162_408786852708690876_n.jpg?oh=18898589c338ee69b6e6d281926f938c&oe=5ADFDF14" alt="" />  -->

                     <img class="current" data-image="white" src="{{ asset ('theme/homepage/image/pic2.jpg') }}" alt="" /> 
                     <!-- <img  data-image="black" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/25507926_1262786377184659_683581835207662055_n.jpg?oh=0536c0582f45e4893bf126ccdc70c485&oe=5AE1247D" alt="" />  -->
                  </li>
                  <li data-target="#carousel-custom" data-slide-to="1">
                    <!-- <img data-image="black" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/25442933_1262782193851744_5225388194854897969_n.jpg?oh=92b0a4eb3afe30e9c69a384b52c091ec&oe=5B15173A" alt="" /> -->

                    <img  class="current" data-image="white" src="{{ asset ('theme/homepage/image/pic6.jpg') }}" alt="" />

                    <!-- <img data-image="yellow" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/26903908_1287758164687480_4639171229686138684_n.jpg?oh=3e48406aed77b7acc27b6fd834acd40d&oe=5AE51307" alt="" /> -->
                  </li>


                  <li data-target="#carousel-custom" data-slide-to="2">
                    <!-- <img data-image="black" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/24909605_1257776487685648_5892381250950520683_n.jpg?oh=0e7c70b0e29cc799055deb3ca344d70d&oe=5ADC051B" alt="" /> -->
                    <!-- <img data-image="yellow" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/26992650_1287760278020602_1589789922654686302_n.jpg?oh=3bbc5ab22a5c67f8b2e0432909f82112&oe=5AE723F7" alt="" /> -->
                    <img  class="current" data-image="white" src="{{ asset ('theme/homepage/image/pic3.jpg') }}" alt="" /> 
                  </li>
              </ol>
            </div>
            <div class="col-md-9">
                  <div class="carousel-outer"> 
                <!-- me art lab slider -->
                <div class="carousel-inner ">
                      <div class="item active">
                          <!-- <img    data-image="yellow" src="1" alt="" /> -->
                          <img class="current" data-image="white" src="{{ asset ('theme/homepage/image/pic2.jpg') }}" alt="" /> <!-- hình to 1 -->
                          <!-- <img data-image="black" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/25507926_1262786377184659_683581835207662055_n.jpg?oh=0536c0582f45e4893bf126ccdc70c485&oe=5AE1247D" alt="" /> -->
                      </div>
                      <div class="item" >
                          <!-- <img data-image="black" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/25442933_1262782193851744_5225388194854897969_n.jpg?oh=92b0a4eb3afe30e9c69a384b52c091ec&oe=5B15173A" alt="" /> -->
                          <img class="current" data-image="white" src="{{ asset ('theme/homepage/image/pic6.jpg') }}" alt="" /> <!-- hình to 2-->
                          <!-- <img data-image="yellow" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/26903908_1287758164687480_4639171229686138684_n.jpg?oh=3e48406aed77b7acc27b6fd834acd40d&oe=5AE51307" alt="" /> -->
                      </div>
                      <div class="item" >
                        <!-- <img data-image="black" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/24909605_1257776487685648_5892381250950520683_n.jpg?oh=0e7c70b0e29cc799055deb3ca344d70d&oe=5ADC051B" alt="" /> -->
                        <img class="current" data-image="white" src="{{ asset ('theme/homepage/image/pic3.jpg') }}" alt="" /> <!-- hình to 3 -->
                        <!-- <img data-image="yellow" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/26992650_1287760278020602_1589789922654686302_n.jpg?oh=3bbc5ab22a5c67f8b2e0432909f82112&oe=5AE723F7" alt="" /> -->
                      </div>
                    </div>
                
                <!-- sag sol --> 
                <a class="left carousel-control" href="#carousel-custom" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-custom" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
                </div>
          </div>
              
              <!-- thumb --> 
              
            </div>
      </div>
          <div class="col-md-5">
        <h3>Ravi <span class="in_sport">Blue T-Shirt</span></h3>
        <table class="table">
              <tbody>
                <tr>
                      <td><span>Estimated Delivery</span></td>
                      <td>Nov 31, Wed  -  Dec 5, Sun</td>
                    </tr>
                <tr>
                      <td><span>Minimum Order Qty</span></td>
                      <td>100 Units </td>
                    </tr>
                <tr>
                      <td><span>Product Code</span></td>
                      <td>YUE3061</td>
                    </tr>
              </tbody>
            </table>
        <hr>
        <div class="row">
              <div class="col-md-12">
            <!-- <h6><span>Retail Price</span></h6> -->
            <h3 class="price">Rs 340.00 /unit</h3>
            <!-- <h4><span>Email ID- : ravi7284007@gmail.com</span></h4> -->
          </div>
            </div>
        <!-- <a href="#0" class="btn btn-cart">ADD TO CART</a> </div> -->
        </div>
      </div>
      <div>
          <h2>About this Product</h2>
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
                                  <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="fa fa-comments" aria-hidden="true"></span>
                                      <div class="hidden-xs">Bình Luận/ Đánh Giá</div>
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
                                      <th class="hidden-xs">Tên Nhà Trọ</th>
                                      <th>Địa Chỉ</th>
                                      <th>Thông Tin</th>
                                      <th>Giá Điện</th>
                                      <th>Giá Nước</th>
                                      <th>Trạng Thái</th>
                                      <th style="text-align: center;"><a class="btn btn-default" href=""><em class="fa fa-plus"></em>Thêm Nhà Trọ</a></th>
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
                            <h3><a href=""> Nếu Bạn Chưa Đăng Kí Nhà Trọ. Hãy Nhấn Vào Đây Để Đăng Kí Nhà Trọ Miễn Phí.</h3></a>
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
                                      <th style="text-align: center;"><a class="btn btn-default" href="{{ route('nhatrofrontend.create') }}"><em class="fa fa-plus"></em>Thêm Nhà Trọ</a></th>
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
                            <!-- <h3>This is tab 3</h3> -->
                              <!-- <div class="col-md-6" style="margin-top: 10px"> -->
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
                        </div>
    
                      </div>
          </section>
                


                  






              </div>
            </div>
            
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
            
  </body>
</html>