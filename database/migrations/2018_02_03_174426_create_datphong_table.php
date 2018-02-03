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
            $table->integer('dp_ma')->unsigned()->comment('Mã Đặt Phòng');
            $table->text('dp_ghichu')->comment('Ghi Chú Đặt Phòng');
            $table->timestamp('dp_thoigiandat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm đặt # Thời điểm đặt phòng trọ');
            $table->timestamp('dp_thoigianketthuc')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm hết thời gian chờ # Thời điểm hết thời gian chờ đặt phòng trọ');
            $table->tinyInteger('dp_trangthai')->default('2')->comment('Trạng thái # Trạng thái đặt phòng: 1-hết hiệu lực, 2-khả dụng');
            $table->unsignedInteger('id')->comment('Tài Khoản đặt chờ');
            $table->unsignedBigInteger('pt_ma')->comment('Mã Phòng trọ đặt chờ');
            $table->primary(['pt_ma', 'id' , 'dp_ma']);

            
            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            
            
            $table->foreign('pt_ma')->references('pt_ma')->on('phongtro')->onDelete('CASCADE')->onUpdate('CASCADE');
            

        });
        DB::statement("ALTER TABLE `datphong` comment 'Đặt Phòng Chờ'");
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
