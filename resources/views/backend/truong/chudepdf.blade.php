<!DOCTYPE html>
<html>
<head>
<title>DANH SÁCH CHỦ ĐỀ</title>
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
</style>
</head>
<body>
<div class="row">
    <table border="0" align="center">
        <tr>
            <td class="companyInfo">
                Công Ty TNHH Sunshine<br/>
                http://sunshine.com/<br/>
                (0292)3.888.999 # 01.222.888.999<br/>
                <img src="{{ asset('upload/sunshine-logo.jpg') }}" />
            </td>
        </tr>
    </table>

    <br/>
    <br/>
    <div class="page-break"></div>
    <?php 
        $soDongTrang = 20;
        $tongSoTrang = ceil(count($dsChude)/$soDongTrang);
    ?>
    <table border="1" align="center" cellpadding="5">
        <caption>DANH SÁCH CHỦ ĐỀ</caption>
        <tr>
            <th colspan="2" align="center">Trang 1 / {{ $tongSoTrang }}</th>
        </tr>
        <tr>
            <th>STT</th>
            <th>Tên Chủ Đề</th>
        </tr>
        @foreach ($dsChude as $cd)
        <tr>
            <td align="center">{{ $loop->index + 1 }}</td>
            <td align="left">{{ $cd->cd_ten }}</td>
        </tr>
        @if (($loop->index + 1) % $soDongTrang == 0)
            </table>
            <div class="page-break"></div>
            <table border="1" align="center" cellpadding="5">
                <tr>
                    <th colspan="2" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
                </tr>
                <tr>
                    <th>STT</th>
                    <th>Tên Chủ Đề</th>
                </tr>
        @endif
        @endforeach
    </table>
</div>
</body>
</html>