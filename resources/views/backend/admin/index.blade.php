@extends('backend.layouts.app')   

@section('title')
  ADMIN
@endsection


@section('page-header')
      <h1>
        ADMIN
        <small>Thông Tin Tổng Quan</small>
      </h1>
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
              <div class="col-lg-3 col-xs-6">
          <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>{{$dsnhatronew}}</h3>
                    <p>Nhà Trọ Mới Đăng Kí </p>
                    <p>Tổng Số Nhà Trọ: {{$dsnhatro}}</p>

                  </div>
                  <div class="icon">
                    <i class="fa fa-home"></i>
                  </div>
                  <a href="{{route('nhatro.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              
            


            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{$dsbaidangnew}}</h3>

                  <p>Bài Đăng Mới</p>
                  <p>Tổng Số Bài Đăng: {{$dsbaidang}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('baidang.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{$dsusernew}}</h3>

                  <p>Người Dùng Mới</p>
                  <p>Tổng Số Người Dùng: {{$dsuser}}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('dsmem')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{$dscommment}}</h3>

                  <p>Bình Luận</p>
                  <p>Tổng Số Bình Luận Trong Ngày: {{$dscommment}}</p>
                </div>
                <div class="icon">
                  <i class="fa fa-comment"></i>
                </div>
                <a href="{{route('binhluanadmin.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


            </div>





            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL REVENUE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL COST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL PROFIT</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            

            



            <!-- /.box-body -->
          </div>

@endsection

