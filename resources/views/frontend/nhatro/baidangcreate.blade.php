    <!DOCTYPE html>
    <html>

         <head>
            <meta charset="UTF-8">
            <title>Nhà Trọ Sinh Viên</title>
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/show.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/footer.css') }}">
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
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmdCD7PZpWL_CKCYzebqsN8WEAkcjWcqY&libraries&libraries=places&callback=initMap"
        async defer></script> -->
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
            type="text/javascript"></script> -->
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
            
          <form name="frmbaidang" method="POST" action="{{ route('baidangfrontend.store') }}" enctype="multipart/form-data">
            <!-- {{ method_field('PATCH') }} -->
            {{ csrf_field() }}
            <div class="description_content">
                <div class="text-content container">
                    
                    <div class="col-md-6">
                      <div id='nz-div-2' style="margin-top: -15px;">
                          <h3 class="tde" style="margin-left:-350px !important">         
                               <span>Thông Tin Bài Đăng</span>
                          </h3>
                        <hr>
                      </div>


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
                                        <option value="{{$lbd->lbd_ma}}">{{$lbd->lbd_ten}}</option>
                                      @endforeach      
                            </select>
                        </div>

                        <div class="col-md-12" style="margin-top: 10px">
                            <!-- <input type="text" name="" class="form" style="width: 100%" placeholder="Chọn Loại Bài Đăng"> -->
                            <select class="form" style="width: 100%" name="nt_ma">
                                      <option value="" disabled selected>Chọn Nhà Trọ Bạn Muốn Đăng Bài</option>
                                      @foreach($dsnhatro as $nt)
                                        <option value="{{$nt->nt_ma}}">{{$nt->nt_ten}}</option>
                                      @endforeach      
                            </select>
                        </div>



                        <div class="col-md-12" style="margin-top: 10px">
                          <!-- <div class="fa fa-home fa-2x"> Thông Tin Nhà Trọ</div> -->
                            <input type="text" name="bd_tieude" class="form" style="width: 100%" placeholder="Tiêu đề bài đăng" value="{{old('bd_tieude')}}">
                        </div>

                        <!-- <div class="col-md-12" style="margin-top: 10px">
                            <input type="text" name="nt_ten" class="form" style="width: 100%" placeholder="Nội dung bài đăng" value="{{old('bd_noidung')}}">
                        </div> -->


                        <div class="col-md-12" style="margin-top: 10px">
                          <!-- <div class="fa fa-home fa-2x"> Thông Tin Nhà Trọ</div> -->
                            <!-- <input type="text" name="nt_ten" class="form" style="width: 100%" placeholder="Nội dung bài đăng" value="{{old('bd_noidung')}}"> -->

                            

                            <textarea id="editor1" name="bd_noidung" rows="10" cols="80" style="width: 100%">
                              {{old('bd_noidung')}}
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
                   <!--  <div class="col-md-6">
                        <div class="img-section">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic6.jpg' )}}" width="250" height="220">
                           <div class="img-section-space"></div>
                           <img src="{{ asset ('theme/homepage/image/pic3.jpg' )}}"  width="250" height="220">
                           <img src="{{ asset ('theme/homepage/image/pic4.jpg' )}}"  width="250" height="220">
                       </div>
                    </div> -->

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
                    

                    


                    <!-- <div class="col-md-12">
                        
                        <textarea id="editor1" name="nt_thongtin" rows="10" cols="80" style="width: 100%" value="{{old('nt_thongtin')}}">
                    </textarea>
                    </div> -->
                    <!-- <div class="col-md-12"> -->
                        

                    
                  </form>

                    


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
            <!-- <script type="text/javascript" src="{{ asset ('theme/homepage/js/upload.js') }}"> </script> -->
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/bootstrap.min.js') }}" ></script>
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery-1.10.2.js') }}"></script>     
            <script type="text/javascript" src="{{ asset ('theme/homepage/js/jquery.mixitup.min.js') }}" ></script>
            <script src="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset ('theme/homepage/upload-image.js') }}"></script>
            <script src="{{ asset ('theme/homepage/ckeditor/ckeditor.js') }}"></script>
            <script>CKEDITOR.replace('editor1');</script>

<script>
  $('#add_more').click(function() {
      "use strict";
      $(this).before($("<div/>", {
        id: 'filediv'
      }).fadeIn('slow').append(
        $("<input/>", {
          name: 'file[]',
          type: 'file',
          id: 'file',
          multiple: 'multiple',
          accept: 'image/*'
        })
      ));
    });

    $('#upload').click(function(e) {
      "use strict";
      e.preventDefault();

      if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
        alert("No files are selected.");
        return false;
      }

      // Now, upload the files below...
      // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
    });

    function deletePreview(ele, i) {
      "use strict";
      try {
        $(ele).parent().remove();
        window.filesToUpload.splice(i, 1);
      } catch (e) {
        console.log(e.message);
      }
    }

    $("#file").on('change', function() {
      "use strict";

      // create an empty array for the files to reside.
      window.filesToUpload = [];

      if (this.files.length >= 1) {
        $("[id^=previewImg]").remove();
        $.each(this.files, function(i, img) {
          var reader = new FileReader(),
            newElement = $("<div id='previewImg" + i + "' class='abcd'><img /></div>"),
            deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>delete</span>").prependTo(newElement),
            preview = newElement.find("img");

          reader.onloadend = function() {
            preview.attr("src", reader.result);
            preview.attr("alt", img.name);
          };

          try {
            window.filesToUpload.push(document.getElementById("file").files[i]);
          } catch (e) {
            console.log(e.message);
          }

          if (img) {
            reader.readAsDataURL(img);
          } else {
            preview.src = "";
          }

          newElement.appendTo("#filediv");
        });
      }
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