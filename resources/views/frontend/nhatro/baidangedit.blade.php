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
            <link rel="stylesheet" href="{{url('css/dropzone.css')}}">
            
  


            
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
                           
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
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
                        <h1 style="font-family: Time new romance">Cập Nhật Bài Đăng</h1>
                        <div class="fa fa-tasks fa-2x"></div>
                        
                        

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
                          <!-- <div class="fa fa-home fa-2x"> Thông Tin Nhà Trọ</div> -->
                            <!-- <input type="text" name="nt_ten" class="form" style="width: 100%" placeholder="Nội dung bài đăng" value="{{old('bd_noidung')}}"> -->

                            <textarea placeholder="Nội Dung Bài Đăng" rows="10" class="form" style="width: 100%; height: 100%;" value="{{$baidang->bd_noidung}}" name="bd_noidung" type="text">{{$baidang->bd_noidung}}
                            </textarea>
                        </div>

                        <div class="col-md-12" style="margin-top: 10px">
                          

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
                    </div>
                    

                    


                    

                    <div class="col-md-12" style="margin-top: 10px">
                            <button type="submit"  class="text-center form-btn" style="width: 100%; background-color: #50a900"><li class="fa fa-paper-plane"> </li> Cập Nhật</button>
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
            <!-- <script>CKEDITOR.replace('editor1');</script> -->


    
  </body>
</html>