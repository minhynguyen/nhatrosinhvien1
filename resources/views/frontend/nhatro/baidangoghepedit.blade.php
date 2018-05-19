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
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/style-portfolio.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/picto-foundry-food.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/jquery-ui.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/timepicker/bootstrap-timepicker.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('theme/homepage/css/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
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
                <h2 class="helpr-title">Đăng Tin Tìm Bạn Ở Ghép</h2>
              </div>
            </div>
          </section>



            
          <form name="frmTruong" method="POST" action="{{route('sinhvien.update', ['baidang'=> $baidang->bd_ma]) }}"> <!-- action tu controller -->
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
            <div class="description_content">
                <div class="text-content container">

                   


                    <div class="col-md-6" style="margin-top: -70px;">
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
                        
                        <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                          <span><strong>Chọn Nhà Trọ Bạn Muốn Đăng Tin Ở Ghép:</strong></span>
                            <select class="form"  id="selectlocation" name="nt_ma" style="width: 100%">
                                      <option value="0" disabled selected>Nhà Trọ Bạn Đang Đăng Tin Ở Ghép</option>
                                      
                                        @foreach($nhatro as $nt)
                                        <option value="{{$nt->nt_ma}}" selected="">{{$nt->nt_ten}}</option>
                                        @endforeach
                                      
                                    </select>
                        </div>



                        <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                              <span><strong>Loại Bài Đăng:</strong></span>
                              <select class="form"  id="selectlocation" name="lbd_ma" style="width: 100%">
                                      <option value="0" disabled selected>Chọn Nhà Trọ Bạn Muốn Đăng Tin Ở Ghép</option>
                                      
                                        
                                        <option value="{{$dsloaibaidang->lbd_ma}}" selected>{{$dsloaibaidang->lbd_ten}}</option>
                                       
                                      
                                    </select>
                              <!-- <span><strong>{{$dsloaibaidang->lbd_ten}}</strong></span> -->
                              <!-- <input type="text" name="lbd_ma" class="panel" style="width: 100%; margin-top: 10px" placeholder="Họ Và Tên" value="{{$dsloaibaidang->lbd_ma}}" readonly="lbd_ma"> -->
                          <!-- </div> -->
                            
                        </div>

                        



                        <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                          <span><strong>Tiêu đề bài đăng:</strong></span>
                            <input type="text" name="bd_tieude" class="form" style="width: 100%" placeholder="Tiêu đề bài đăng" value="{{$baidang->bd_tieude}}"">
                        </div>

                  
                        <div class="col-md-12" style="text-align: left; margin-top: 10px;">
                           
                            <span><strong>Nội Dung Bài Đăng:</strong></span>
                                  <textarea id="editor1" name="bd_noidung" rows="10" cols="80" style="width: 100%">{{$baidang->bd_tieude}}
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
                                     Đăng Tin Ở Ghép
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

    
</body>
</html>