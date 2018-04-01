<div>
	<h1>Xin Chào {{ Auth::user()->name }}.</h1>
	<h3>Thông Tin Nhà Trọ Bạn Đặt Xem Phòng</h3>
	<li>{{$datphong->nt_ten}}</li>
	<li>{{$datphong->nt_diachi}}</li>
	<li>{{$datphong->nt_sdtlienhe}}</li>
	<br/>
	<h2>Ngày đặt {{$datphong->dp_thoigiandat}}</h2>
	<h2>Ngày hết hạn {{$datphong->dp_thoigianketthuc}}</h2>
	<!-- <br/> -->
	Xin Cám ơn
</div>

