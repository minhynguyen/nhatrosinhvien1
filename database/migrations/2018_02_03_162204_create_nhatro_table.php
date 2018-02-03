<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhatroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhatro', function (Blueprint $table) {
            $table->bigIncrements('nt_ma')->comment('Mã nhà trọ');
            $table->string('nt_ten', 150)->comment('Tên nhà trọ');
            $table->string('nt_diachi', 150)->comment('Địa chỉ nhà trọ');
            $table->double('nt_kinhdo',20,10)->comment('Kinh Độ Của Nhà Trọ trên GG Map');
            $table->double('nt_vido',20,10)->comment('Vĩ Độ Của Nhà Trọ trên GG Map');
            $table->text('nt_thongtin')->comment('Thông tin nhà trọ');
            $table->unsignedInteger('nt_giadien')->default('0')->comment('Giá điện cho thuê');
            $table->unsignedInteger('nt_gianuoc')->default('0')->comment('Giá nước cho thuê');
            $table->string('nt_hinh', 150)->comment('Hình đại diện nhà trọ');
            $table->timestamp('nt_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo nhà trọ');
            $table->timestamp('nt_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật nhà trọ gần nhất');
            $table->tinyInteger('nt_trangthai')->default('2')->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
            $table->unsignedInteger('id')->comment('Tài Khoản Cho Thuê');
            
            $table->unique(['nt_ma','nt_ten']);
            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `nhatro` comment 'Nhà Trọ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhatro');
    }
}
