<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongtroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongtro', function (Blueprint $table) {
            $table->bigIncrements('pt_ma')->comment('Mã phòng trọ');
            $table->string('pt_ten', 150)->comment('Tên phòng trọ');
            $table->unsignedInteger('pt_giaphong')->default('0')->comment('Giá phòng cho thuê');
            $table->double('pt_dientich',20,10)->comment('Diện tích phòng trọ');
            $table->tinyInteger('pt_trangthai')->default('2')->comment('Trạng thái # Trạng thái phòng trọ: 1-khóa, 2-khả dụng');
            $table->unsignedBigInteger('nt_ma')->comment('Nhà Trọ');
            
            $table->unique(['pt_ma','pt_ten']);
            $table->foreign('nt_ma')->references('nt_ma')->on('nhatro')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `phongtro` comment 'Phòng Trọ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phongtro');
    }
}
