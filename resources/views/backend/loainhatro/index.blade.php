@extends('backend.layouts.app')   

@section('title')
  Loại Nhà Trọ
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC LOẠI NHÀ TRỌ
        <small>Các Loại Nhà Trọ</small>
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
              <h3 class="box-title">DANH SÁCH CÁC LOẠI NHÀ TRỌ</h3>
              
              

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>

                </div>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered table-hover" id="loainhatro-table">
                <thead>
                <tr>
                  <th>Mã</th>
                  <th style="text-align: center;">Tên Loại</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th>Trạng Thái</th>
                  <th><button type="button" class="btn btn-info"> <a href="{{ route('loainhatro.create') }}"><i class="fa fa-plus"></i> Thêm Loại Nhà Trọ</a></button></th>
                  <!-- <th></th> -->
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
    $('#loainhatro-table').DataTable({
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
        ajax: '{!! route('loainhatro') !!}',
        columns: [
            { data: 'lnt_ma', name: 'lnt_ma' },
            { data: 'lnt_ten', name: 'lnt_ten' },
            { data: 'lnt_trangthai', name: 'lnt_trangthai' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script> 


 

@endsection



