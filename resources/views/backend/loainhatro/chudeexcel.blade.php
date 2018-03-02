<!DOCTYPE html>
<html>
<head>
<title>Danh sách chủ đề</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
	table, tr th, tr td {
        background-color: #ffffff;
        border: 2px solid #000000;
    }
</style>
</head>
<body>
<div class="row">
    <table align="center">
        <tr>
            <td colspan="2">Công ty TNHH Sunshine</td>
        </tr>
        <tr>
            <td colspan="2">http://sunshine.com/</td>
        </tr>
        <tr>
            <td colspan="2">(0292)3.888.999 # 01.222.888.999</td>
        </tr>
        <tr>
            <td colspan="2"><img src="{{ public_path('upload/sunshine-logo.jpg') }}" /></td>
        </tr>
    </table>
    <br/>
    <br/>
    <?php 
        $soDongTrang = 20;
        $tongSoTrang = ceil(count($dsChude)/$soDongTrang);
    ?>
    <table align="center" cellpadding="5">
        <caption>Danh sách chủ đề</caption>
        <tr>
            <th width="5">STT</th>
            <th width="50">Tên chủ đề</th>
        </tr>
        @foreach ($dsChude as $cd)
        <tr>
            <td align="center">{{ $loop->index + 1 }}</td>
            <td align="left">{{ $cd->cd_ten }}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>