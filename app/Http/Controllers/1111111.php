<table class="table table-hover text-center ">
                <tr>
                  <th>Mã</th>
                  <th style="text-align: left;">Tên Loại</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th style="text-align: left;">Trạng Thái</th>
                  <th colspan="2" style="text-align: center;"><button type="button" class="btn btn-info"> <a href="{{ route('loaibaidang.create') }}"  ><i class="fa fa-plus"></i> Thêm Loại Bài Đăng</a></button></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsloaibaidang as $lbd)
        <!-- nhãn từ controller -->
                <tr>
                    <td style="text-align: center;">{{$lbd->lbd_ma}}</td>
                    <td style="text-align: left;">{{$lbd->lbd_ten}}</td>

                    @if ($lbd->lbd_trangthai === 1)

                        <td style="text-align: left;"><span class="badge bg-yellow">KHÓA</span></td>
                    @else
                        <td style="text-align: left;"><span class="badge bg-green">Khả Dụng</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('loaibaidang.edit', ['loaibaidang' => $lbd->lbd_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    </td>
                    <td>
                      <form method="POST" action="{{route('loaibaidang.destroy', ['loaibaidang' => $lbd->lbd_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a></button>
                      </form>
                    </td>
                </tr>

        @endforeach
                
                
              </table>








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




        <table class="table table-hover text-center ">
                <tr>
                  <!-- <th>Mã Tài Khoản</th> -->
                  <th style="text-align: left;">Tên Tài Khoản</th>
                  <th style="text-align: left;">Tiêu Đề Bài Đăng</th>
                  <th style="text-align: left;">Nội Dung Bình Luận</th>
                  <th style="text-align: left;">Ngày Đăng</th>
                  <th style="text-align: center;">Tác Vụ</th>
                  
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsbinhluan as $bl)
        <!-- nhãn từ controller -->
                <tr>
                    <!-- <td style="text-align: center;">{{$bl->id}}</td> -->
                    <td style="text-align: left;">{{$bl->name}}</td>
                    <td style="text-align: left;">{{$bl->bd_tieude}}</td>
                    <td style="text-align: left;">{{$bl->bl_noidung}}</td>
                    <td style="text-align: left;">{{$bl->bl_taomoi}}</td>

                    
                    
                    <td>
                      <form method="POST" action="{{route('binhluanadmin.destroy', ['binhluan' => $bl->bl_noidung])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <a style="color: white"> <i class="fa fa-trash"></i> Delete </a></button>
                      </form>
                    </td>
                </tr>

        @endforeach
                
                
              </table>





              <!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="../code/style.css"/>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.2.0.min.js"/></script>
   <script src="js/jquery.dataTables.min.js"/></script>
   <script src="js/dataTables.bootstrap.min.js"/></script>
   <script language="javascript">
     $(document).ready(function()
     { 
      var table = $('#tablesalomon').DataTable(
      {
        responsive: true,
        "language": {
          "lengthMenu": "Hiển thị _MENU_ dòng dữ liệu trên một trang",
           "info":" Hiển thị _START_ trong tổng số _TOTAL_ dòng dữ liệu",
           "infoEmpty":"Dữ liệu rỗng",
           "emptyTable":"Chưa có dữ liệu nào",
           "processing":"Đang xử lý...", 
           "search":"Tìm kiếm",
           "loadingRecords":"Đang load dữ liệu",
          "zeroRecords":"không tìm thấy dữ liệu",
          "infoFiltered":"(Được từ tổng số _MAX_ dòng dữ liệu)",

          "paginate":
           {
            "first": "|<",
            "last": ">|",
            "next":">>",
            "previous":"<<"
         }
        },
        "lengthMenu": [[2, 5, 10, 15, 20, 25, 30, -1], [2, 5, 10, 15, 20, 25, 30, "all"]]


      });
      new $.fn.dataTable.FixedHeader( table );
     }
      );
   </script>
  <script >
    function deleteConfirm()
    {
        if(confirm("are U sure??"))
        {
          return true;
        }
        else
        {
          return false;
        }
    }
  </script>
        <form name="frmXoa" method="post" action="">
        <h1>Danh sách loại sản phẩm</h1>
        <?php 
            include_once('connection.php');
            if(isset($_POST['btnXoa'] )&& isset($_POST['checkbox']))
            {
              for($i=0 ; $i< count($_POST['checkbox']); $i++ )
               {  echo$_POST['checkbox'][$i];
                    $maloai=$_POST['checkbox'][$i];
                    mysqli_query($conn, "DELETE FROM loaisanpham WHere lsp_ma='$maloai'");
                }
            }
            if(isset($_GET['ma']))
                { 
                  $ma=$_GET['ma'];
                  mysqli_query($conn,"DELETE from loaisanpham where lsp_ma=$ma");
                }
        ?>
        <p>
        <a href="?khoatrang=quanlyloaisanpham_themmoi" ><img src="images/add.png" alt="Thêm mới" width="16" height="16" border="0" ></a> Thêm mới
        </p>
        <table id="tablesalomon" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>

                    <th><strong>Chọn</strong></th>
                    <th><strong>Số thứ tự</strong></th>
                    <th><strong>Tên loại sản phẩm</strong></th>
                     <th><strong>Mô tả</strong></th>
                    <th><strong>Cập nhật</strong></th>
                    <th><strong>Xóa</strong></th>
                </tr>
             </thead>

      <tbody>
      <?php 
      include_once('connection.php');
      $sql="SELECT * FROM loaisanpham ";
      $result= mysqli_query($conn,$sql);
      $i=0;
      while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $i=$i+1;
      
      ?>

      <tr>    
              <td ><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $row['lsp_ma'] ?>"> </td>
              <td><?php echo $i  ?></td>
              <td><?php echo $row['lsp_ten']  ?></td>
              <td><?php echo $row['lsp_mota']  ?></td>
             
              <td align='center' class='cotNutChucNang'><a href="?khoatrang=quanlyloaisanpham_capnhat&ma=<?php echo $row['lsp_ma']?> "><img src='images/edit.png' border='0' /></a></td>
              <td align='center' class='cotNutChucNang'><a href="?khoatrang=quanlyloaisanpham&ma=<?php echo $row['lsp_ma']?>" onclick="return deleteConfirm()" > <img src='images/delete.png' border='0' /> </a></td>
            </tr>
          <?php 

          } ?>
      </tbody>
        
        </table>  
        
        
        <!--Nút Thêm mới , xóa tất cả
        -->

        <div class="row" style="background-color:#FFF"> <!--Nút chức nang-->
            <div class="col-md-12">
              <input class="btn btn-primary" type="submit" name="btnXoa" id="btnXoa" value="Chọn Xóa"onclick='return deleteConfirm()'>
            </div>
        </div><!--Nút chức nang-->
 </form>







 @foreach ($dsbaidang as $baidang)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$baidang->bd_ma}}</td>
                    <td style="text-align: left;">{{$baidang->name}}</td>
                    <td style="text-align: left;">{{$baidang->nt_ten}}</td>
                    <td style="text-align: left;">{{$baidang->lbd_ten}}</td>
                    <td style="text-align: left;">{{$baidang->bd_tieude}}</td>
                    <td style="text-align: left;">{{$baidang->bd_noidung}}</td>
                    
                    @if ($baidang->bd_trangthai === 2)

                        <td style="text-align: center;"><span class="badge bg-yellow">Chờ Duyệt</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-green">Đã Duyệt</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('baidang.edit', ['baidang' => $baidang->bd_ma]) }}" style="color: white"><i class="fa fa-edit"></i> </a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('baidang.destroy', ['baidang' => $baidang->bd_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></a></button>
                      </form>
                    </td>
                    
                </tr>

        @endforeach



        @foreach ($dsnhatro as $nhatro)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$nhatro->nt_ma}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_ten}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_diachi}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_vido}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_kinhdo}}</td>
                    <td style="text-align: left;">{{$nhatro->lnt_ten}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_dientich}}</td>
                     
                    <td style="text-align: left;">{{$nhatro->nt_giadien}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_gianuoc}}</td>
                    <td style="text-align: left;">{{$nhatro->nt_giathue}}</td>
                    @if ($nhatro->nt_tinhtrang === 1)

                        <td style="text-align: center;"><span class="badge bg-green">Còn Phòng</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Hết Phòng</span></td>
                    @endif
                    @if ($nhatro->nt_trangthai === 1)

                        <td style="text-align: center;"><span class="badge bg-green">Đã Duyệt</span></td>
                    @else
                        <td style="text-align: center;"><span class="badge bg-yellow">Chờ Duyệt</span></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('nhatro.edit', ['nhatro' => $nhatro->nt_ma]) }}" style="color: white"><i class="fa fa-edit"></i> </a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('nhatro.destroy', ['nhatro' => $nhatro->nt_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"><a style="color: white"> <i class="fa fa-trash"></i></a></button>
                      </form>
                    </td>
                    
                </tr>

        @endforeach