@extends('backend.layouts.app')   

@section('title')
  Loại Bài Đăng
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC LOẠI BÀI ĐĂNG
        <small>Các Loại Bài Đăng</small>
      </h1>
@endsection
@section('input')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
@endsection
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<style>
  a {
    color: #ffffff !important;
}
td{
  text-align: center; !important;
}

th{
  text-align: center; !important;
}
</style>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">DANH SÁCH CÁC LOẠI BÀI ĐĂNG</h3>
              
              

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
              <table class="table table-bordered table-hover" id="loaibaidang-table">
                <!-- <thead> -->
                <thead>
            <tr>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Tạo Mới</th>
                <th>Cập Nhật</th>
                <th>Trạng Thái</th>
                <th style="text-align: center;"><button type="button" class="btn btn-info"> <a href="{{ route('loaibaidang.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Loại Bài Đăng</a></button></th>
            </tr>
              </thead>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
@section('script')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(function() {
    $('#loaibaidang-table').DataTable({
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
        ajax: '{!! route('loaibaidang') !!}',
        columns: [
            { data: 'lbd_ma', name: 'lbd_ma' },
            { data: 'lbd_ten', name: 'lbd_ten' },
            { data: 'lbd_taomoi', name: 'lbd_taomoi' },
            { data: 'lbd_capnhat', name: 'lbd_capnhat' },
            { data: 'lbd_trangthai', name: 'lbd_trangthai' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script> 


 

@endsection


