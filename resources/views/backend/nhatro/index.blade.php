@extends('backend.layouts.app')   

@section('title')
  Nhà Trọ
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC NHÀ TRỌ
        <small>Thông Tin Các Nhà Trọ</small>
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
              <h3 class="box-title">DANH SÁCH CÁC NHÀ TRỌ</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search" id="search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
                  </div>

                </div>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center " id="nhatro-table">
                <thead>
                <tr>
                  <th>Mã</th>
                  <th style="text-align: left;">Tên Nhà Trọ</th>
                  <th style="text-align: left;">Địa Chỉ</th>
                  <th style="text-align: left;">Vĩ độ</th>
                  <th style="text-align: left;">Kinh độ</th>
                  <th style="text-align: left;">Loại Nhà Trọ</th>
                  <th style="text-align: left;">Diện Tích</th>
                  <th style="text-align: left;">Giá Điện</th>
                  <th style="text-align: left;">Giá Nước</th>
                  <th style="text-align: left;">Giá Thuê</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th >Tình trạng</th>
                  <th >Trạng Thái</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('nhatro.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Nhà Trọ</a></button></th>
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
    $('#nhatro-table').DataTable({
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
        ajax: '{!! route('nhatro') !!}',
        columns: [
            { data: 'nt_ma', name: 'nt_ma' },
            { data: 'name', name: 'users.name' },
            { data: 'nt_ten', name: 'nt_ten' },
            { data: 'lnt_ten', name: 'loainhatro.lnt_ten' },
            { data: 'nt_diachi', name: 'nt_diachi' },
            { data: 'nt_giathue', name: 'nt_giathue' },
            { data: 'nt_dientich', name: 'nt_dientich' },
            { data: 'nt_tinhtrang', name: 'nt_tinhtrang' },
            { data: 'nt_trangthai', name: 'nt_trangthai' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script> 


 

@endsection

<!-- <script type="text/javascript">
 
$('#search').on('keyup',function(){

    $value=$(this).val();
    $.ajax({ 
    type : 'get',
    url : '{{URL::to('search')}}',
    data:{'search':$value},
    success:function(data){
    $('tbody').html(data);
    }
    });
})
 
</script> -->




