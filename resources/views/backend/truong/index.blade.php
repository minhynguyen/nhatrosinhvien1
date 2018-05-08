@extends('backend.layouts.app')   

@section('title')
  Trường Học
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC TRƯỜNG ĐẠI HỌC
        <small>Tọa Độ Của Các Trường Đại Học Trên Địa Bàn Thành Phố Cần Thơ</small>
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
              <h3 class="box-title">DANH SÁCH CÁC TRƯỜNG</h3>
              
              

              <!-- <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" id="search" name="search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>

                </div>

              </div> -->


              


            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding" >
              <table class="table table-bordered table-hover" id="truong-table">
                <thead>
                <tr>
                  <th>Mã</th>
                  <th style="text-align: center;">Tên Trường</th>
                  <th style="text-align: center;">Vĩ độ</th>
                  <th style="text-align: center;">Kinh độ</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th>Trạng Thái</th>
                  <th><button type="button" class="btn btn-info"> <a href="{{ route('truong.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Trường</a></button></th>
                  <!-- <th></th> -->
                </tr>
                </thead>

                
                
                
              </table>
             
              
              
            </div>

  </div>
  


@endsection


@section('script')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(function() {
    $('#truong-table').DataTable({
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
        ajax: '{!! route('truonghoc') !!}',
        columns: [
            { data: 't_ma', name: 't_ma' },
            { data: 't_ten', name: 't_ten' },
            { data: 't_vido', name: 't_vido' },
            { data: 't_kinhdo', name: 't_kinhdo' },
            { data: 't_trangthai', name: 't_trangthai' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script> 


 

@endsection



