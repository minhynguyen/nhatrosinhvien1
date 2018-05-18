<!DOCTYPE html>
<html>
<head>
<title>DANH SÁCH NHÀ TRỌ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
  * { font-family: DejaVu Sans, sans-serif; }
    body  { font-size: 10px; }
  table { border-collapse: collapse; }
    td { vertical-align: middle; }
    caption {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
    }
    .companyInfo {
        font-size: 13px;
        font-weight: bold;
        text-align: center;
    }
    .page-break {
        page-break-after: always;
    }
    .img{
      float: left;
      width: 50%;
      height: 50%
    }
</style>
</head>
<body>
<div class="row">
    <table border="0" align="center">
        <tr>
            <td class="companyInfo">
                nhatrosinhvien.com<br/>
                
                (0292)3.888.999 # 01.222.888.999<br/>
                <img class="img" src="{{ asset ('theme/homepage/image/tt3.jpg') }}" />
                <img class="img" src="{{ asset ('theme/homepage/image/tt3.jpg') }}" />
            </td>
        </tr>
    </table>

    <br/>
    <br/>
    <!-- <div class="page-break"></div> -->
    <?php 
        $soDongTrang = 20;
        $tongSoTrang = ceil(count($dsnhatro)/$soDongTrang);
    ?>
    <table border="1" align="center" cellpadding="5">
        <caption>DANH SÁCH CÁC NHÀ TRỌ TRÊN HỆ THỐNG</caption>
        <tr>
            <th colspan="13" align="center">Trang 1 / {{ $tongSoTrang }}</th>
        </tr>
        <tr>
            <th>STT</th>
                  <th style="text-align: left;">Người đăng</th>
                  <th style="text-align: left;">Tên Nhà Trọ</th>
                  <th style="text-align: left;">Loại Nhà Trọ</th>
                  <th style="text-align: left;">Địa Chỉ</th>
                  <th style="text-align: left;">Kinh Độ</th>
                  <th style="text-align: left;">Vĩ Độ</th>
                  <th style="text-align: left;">Diện Tích</th>
                  <th style="text-align: left;">Giá Điện</th>
                  <th style="text-align: left;">Giá Nước</th>
                  <th style="text-align: left;">Giá Thuê</th>
                  
                  <th style="text-align: left;">Tình Trạng</th>
                  <th style="text-align: left;">Trạng Thái</th>
        </tr>
        @foreach ($dsnhatro as $nhatro)
        <tr>
            <td align="center">{{ $loop->index + 1 }}</td>
            <td style="text-align: left;">{{$nhatro->name}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_ten}}</td>
                    <td style="text-align: left;">{{$nhatro->lnt_ten}}</td>

                    <td style="text-align: left;">{{$nhatro->nt_diachi}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_vido}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_kinhdo}}</td>
                    <!-- <td style="text-align: left;">{{$nhatro->lnt_ten}}</td> -->
                    <td style="text-align: center;">{{$nhatro->nt_dientich}}</td>
                     
                    <td style="text-align: center;">{{$nhatro->nt_giadien}}</td>
                    <td style="text-align: center;">{{$nhatro->nt_gianuoc}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_giathue}}</td>
                    @if ($nhatro->nt_tinhtrang === 1)

                        <td style="text-align: center;"><span class="badge bg-green">Còn Phòng</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Hết Phòng</span></td>
                    @endif
                    @if ($nhatro->nt_trangthai === 1)

                        <td style="text-align: center;"><span class="badge bg-green">Đã Duyệt</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Chờ Duyệt</span></td>
                    @endif
        </tr>
        @if (($loop->index + 1) % $soDongTrang == 0)
            </table>
            <div class="page-break"></div>
            <table border="1" align="center" cellpadding="5">
                <tr>
                    <th colspan="13" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
                </tr>
                <tr>
                    <th>STT</th>
                  <th style="text-align: left;">Người đăng</th>
                  <th style="text-align: left;">Tên Nhà Trọ</th>
                  <th style="text-align: left;">Loại Nhà Trọ</th>
                  <th style="text-align: left;">Địa Chỉ</th>
                  <th style="text-align: left;">Kinh Độ</th>
                  <th style="text-align: left;">Vĩ Độ</th>
                  <th style="text-align: left;">Diện Tích</th>
                  <th style="text-align: left;">Giá Điện</th>
                  <th style="text-align: left;">Giá Nước</th>
                  <th style="text-align: left;">Giá Thuê</th>
                  
                  <th style="text-align: left;">Tình Trạng</th>
                  <th style="text-align: left;">Trạng Thái</th>
                </tr>
        @endif
        @endforeach
    </table>
</div>
</body>
</html>