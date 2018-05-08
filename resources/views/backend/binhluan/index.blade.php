@extends('backend.layouts.app')   

@section('title')
  Bình Luận
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC BÌNH LUẬN
        <small>Bình Luận Bài Đăng</small>
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
              <h3 class="box-title">DANH SÁCH CÁC BÌNH LUẬN</h3>
              
              

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center " id="binhluan-table">
                <thead>
                <tr>
                  <!-- <th>Mã Tài Khoản</th> -->
                  <th style="text-align: left;">Tên Tài Khoản</th>
                  <th style="text-align: left;">Tiêu Đề Bài Đăng</th>
                  <th style="text-align: left;">Nội Dung Bình Luận</th>
                  <th style="text-align: left;">Ngày Đăng</th>
                  <th style="text-align: center;">Tác Vụ</th>
                  
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
    $('#binhluan-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('binhluan') !!}',
        columns: [
            { data: 'name', name: 'users.name' },
            { data: 'bd_tieude', name: 'baidang.bd_tieude' },
            { data: 'bl_noidung', name: 'binhluan.bl_noidung' },
            { data: 'bl_taomoi', name: 'binhluan.bl_taomoi' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script> 


 

@endsection



