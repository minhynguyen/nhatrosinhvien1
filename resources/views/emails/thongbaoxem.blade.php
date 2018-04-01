<div>
	<h1>Xin Chào {{ $datphong->name }}.</h1>
	<h3>Chúng Tôi Vừa Nhận Được Đề Nghị Xem Phòng</h3>
	<h3>Thông Tin Nhà Trọ</h3>

	<li>{{$datphong->nt_ten}}</li>
	<li>{{$datphong->nt_diachi}}</li>
	<!-- <li>{{$datphong->nt_sdtlienhe}}</li> -->
	<br/>
	<h3>Thông Tin Đặt Phòng</h3>
	<h3>Số Điện Thoại Người Đặt {{$datphong->dp_sdt}}</h3>
	<h3>Tên Người Đặt {{ Auth::user()->name }}</h3>
	<h3>Email Người Đặt {{ Auth::user()->email }}</h3>
	<h3>Ngày đặt {{$datphong->dp_thoigiandat}}</h3>
	<h3>Ngày hết hạn {{$datphong->dp_thoigianketthuc}}</h3>
	<h3>Ghi Chú {{$datphong->dp_ghichu}}</h3>
	<!-- <br/> -->
	Xin Cám ơn
</div>

