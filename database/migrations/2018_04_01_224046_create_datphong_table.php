<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatphongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datphong', function (Blueprint $table) {
                    $table->text('dp_ghichu')->comment('Ghi Chú Đặt Phòng');
                    $table->unsignedBigInteger('nt_ma')->comment('Mã Nhà Trọ đăng bài');
                     $table->string('dp_sdt', 11)->defaut("NULL")->nullable();
                    $table->timestamp('dp_thoigiandat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm đặt # Thời điểm đặt phòng trọ');
                    $table->timestamp('dp_thoigianketthuc')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm hết thời gian chờ # Thời điểm hết thời gian chờ đặt phòng trọ');
                    $table->tinyInteger('dp_trangthai')->default('2')->comment('Trạng thái # Trạng thái đặt phòng: 1-hết hiệu lực, 2-khả dụng');
                    $table->unsignedInteger('id')->comment('Tài Khoản đặt chờ');

                    $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');

                    $table->foreign('nt_ma')->references('nt_ma')->on('nhatro')->onDelete('CASCADE')->onUpdate('CASCADE');

                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datphong');
    }
}
