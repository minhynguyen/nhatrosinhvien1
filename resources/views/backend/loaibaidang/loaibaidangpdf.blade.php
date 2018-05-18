<!DOCTYPE html>
<html>
<head>
<title>DANH SÁCH CHỦ ĐỀ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset ('theme/homepage/css/thongtin.css') }}">
<style>
    .img{
        width: 100px;
        height: 100px;

        
    }

</style>
</head>
<body>
<div class="row">
<div class="offer offer-success">
<div class="offer-content">
    <div class="box" style="background-color: #e0eceb">
      <div class="box-content" style="text-align: left !important;">
          <h2 class="tag-title" style="text-align: center !important;">nhatrosinhvien.com</h2>
          <img class="img" src="{{ asset ('theme/homepage/image/tt3.jpg') }}" style="float: right;">
          <h2 class="tag-title" style="text-align: center !important;">DANH SÁCH CÁC LOẠI BÀI ĐĂNG</h2>
     
    <div class="container" style="margin-top: 50px;">

    <table class="table table-striped table-bordered table-list">
        <thead>
           <tr>
            <th style="text-align: center;">STT</th>
            <th>Tên Loại Bài Đăng</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($dsloaibaidang as $cd)
        <tr>
            <td align="center">{{ $loop->index + 1 }}</td>
            <td align="left">{{ $cd->lbd_ten }}</td>
        </tr>
        
        @endforeach
        </tbody>
    </table>
    </div>
     </div>
</div>
</div>
</div>
    

    

    
</div>
</body>
</html>