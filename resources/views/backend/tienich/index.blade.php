@extends('backend.layouts.app')   

@section('title')
  Tiện Ích Nhà Trọ
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC TIỆN ÍCH NHÀ TRỌ
        <small>Tiện Ích Nhà Trọ</small>
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
              <h3 class="box-title">DANH SÁCH CÁC TIỆN ÍCH NHÀ TRỌ</h3>
              
              

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
              <table class="table table-bordered table-hover" id="tienich-table">
                <thead>
                <tr>
                  <th>Mã</th>
                  <th style="text-align: left;">Tên Tiện Ích</th>
                  <th style="text-align: left;">Diễn Giải</th>
                  <th>Trạng Thái</th>
                  <!-- <th>Ngày Cập Nhật</th> -->
                  <th><button type="button" class="btn btn-info"> <a href="{{ route('tienich.create') }}"><i class="fa fa-plus"></i> Thêm Tiện Ích</a></button></th>
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
    $('#tienich-table').DataTable({
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
        ajax: '{!! route('tienich') !!}',
        columns: [
            { data: 'ti_ma', name: 'ti_ma' },
            { data: 'ti_ten', name: 'ti_ten' },
            { data: 'ti_diengiai', name: 'ti_diengiai' },
            { data: 'ti_trangthai', name: 'ti_trangthai' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script> 


 

@endsection



