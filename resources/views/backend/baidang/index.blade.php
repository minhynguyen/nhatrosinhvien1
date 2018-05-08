@extends('backend.layouts.app')   

@section('title')
  Bài Đăng
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC BÀI ĐĂNG
        <small>Thông Tin Các Bài Đăng</small>
      </h1>
@endsection


@section('input')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
@endsection

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

<style>
  a {
    color: white !important;
}
td{
  text-align: left !important;
}
th{
  text-align: left !important;
}
</style>
@endsection




<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">DANH SÁCH CÁC BÀI ĐĂNG</h3>
              <!-- <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>

                </div>

              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered table-hover" id="baidang-table">
                <thead>
                <tr>
                  <th>Mã</th>
                  <th style="text-align: left;">Tên Người Đăng</th>
                  <th style="text-align: left;">Tên Nhà Trọ</th>
                  <th style="text-align: left;">Loại Bài Đăng</th>
                  <th style="text-align: left;">Tiêu Đề</th>
                  <th style="text-align: left;">Nội Dung</th>
                  <th >Trạng Thái</th>
                  <th ><button type="button" class="btn btn-info"> <a href="{{ route('baidang.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Bài Đăng</a></button></th>
                  <!-- <th></th> -->
                </tr>
                </thead>
                
                
                
              </table>
              <div style="float: right; margin-right: 10px;">
                {!! $dsbaidang->render() !!}
              </div>
            </div>
            <!-- /.box-body -->
          </div>

@endsection


@section('script')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(function() {
    $('#baidang-table').DataTable({
        processing: true,
        serverSide: true,
        "language": {
          "lengthMenu": "Hiển thị _MENU_ dòng dữ liệu trên một trang",
           "info":" Hiển thị _START_ trong tổng số _TOTAL_ dòng dữ liệu",
           "infoEmpty":"Dữ liệu rỗng",
           "emptyTable":"Chưa có dữ liệu nào",
           "processing":"Đang Xử Lý...", 
           "search":"Tìm Kiếm",
           "loadingRecords":"Đang load dữ liệu",
          "zeroRecords":"Không Tìm Thấy Dữ Liệu",
          "infoFiltered":"(Lọc Trong _MAX_ Dòng Dữ Liệu)",
        },
        ajax: '{!! route('baidang') !!}',
        columns: [
            { data: 'bd_ma', name: 'bd_ma' },
            { data: 'name', name: 'users.name' },
            { data: 'nt_ten', name: 'nhatro.nt_ten' },
            { data: 'lbd_ten', name: 'loaibaidang.lbd_ten' },
            { data: 'bd_tieude', name: 'bd_tieude' },
            { data: 'bd_noidung', name: 'bd_noidung' },
            { data: 'bd_trangthai', name: 'bd_trangthai' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script> 


 

@endsection