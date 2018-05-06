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
  /*a {
    color: black !important;
}*/
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
              <table class="table table-hover text-center ">
                <tr>
                  <th>Mã</th>
                  <th style="text-align: center;">Tên Trường</th>
                  <th style="text-align: center;">Vĩ độ</th>
                  <th style="text-align: center;">Kinh độ</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th>Trạng Thái</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('truong.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Trường</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dstruong as $truong)
        <!-- nhãn từ controller -->

                <tr>
                    <td>{{$truong->t_ma}}</td>
                    <td style="text-align: left;">{{$truong->t_ten}}</td>
                    <td style="text-align: center;">{{$truong->t_vido}}</td>
                    <td style="text-align: center;">{{$truong->t_kinhdo}}</td>
                    <!-- <td>{{$truong->t_taomoi}}</td>
                    <td>{{$truong->t_capnhat}}</td> -->
                    <!-- <td>{{$truong->t_trangthai}}</td> -->
                     @if ($truong->t_trangthai === 1)

                        <td style="text-align: center;"><span class="badge bg-yellow">KHÓA</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('truong.edit', ['truong' => $truong->t_ma]) }}" style="color: white"><i class="fa fa-edit"></i> Edit</a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('truong.destroy', ['truong' => $truong->t_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"><a style="color: white"><i class="fa fa-trash"></i> Delete </a></button>
                      </form>
                    </td>
                </tr>

        @endforeach
                
                
              </table>
              
              <div style="float: right; margin-right: 10px;">
                {!! $dstruong->render() !!}
              </div>
                
              
              
            </div>

  </div>
  <div class="box">

            <table class="table table-bordered table-hover">

              <div class="box-tools" style="float: right;">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" id="search" name="search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>

                </div>

              </div>
              <thead>
               
              <tr>
               
              <th>Mã</th>
                  <th style="text-align: center;">Tên Trường</th>
                  <th style="text-align: center;">Vĩ độ</th>
                  <th style="text-align: center;">Kinh độ</th>
                  <th>Trạng Thái</th>
                  <!-- <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('truong.create') }}" style="color: white"><i class="fa fa-plus"></i> Thêm Trường</a></button></th>  -->              
              </tr>
               
              </thead>
               
              <tbody id="tbody1">

               
              </tbody>
               
              </table>
               
              </div>
               
              </div>
               
              </div>
               
              </div>
            <!-- /.box-body -->
          </div>


@endsection


@section('script')
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
 
$('#search').on('keyup',function(){
 
$value=$(this).val();
console.log($value);
$.ajax({
 
type : 'get',
 
url: '{{url('/search')}}',
 
data:{'search':$value},

 
success:function(data){
 
$('#tbody1').html(data);
 
}
 
});
 
 
 
})
 
</script>


 

@endsection



