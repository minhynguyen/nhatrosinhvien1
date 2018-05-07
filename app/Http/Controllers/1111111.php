<table class="table table-hover text-center ">
                <tr>
                  <th>Mã</th>
                  <th style="text-align: left;">Tên Loại</th>
                  <!-- <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th> -->
                  <th style="text-align: left;">Trạng Thái</th>
                  <th colspan="2" style="text-align: center;"><button type="button" class="btn btn-info"> <a href="{{ route('loaibaidang.create') }}"><i class="fa fa-plus"></i> Thêm Loại Bài Đăng</a></button></th>
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