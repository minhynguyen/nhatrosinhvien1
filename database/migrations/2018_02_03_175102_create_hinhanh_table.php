<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->unsignedBigInteger('nt_ma')->comment('Mã Nhà Trọ');
            $table->unsignedTinyInteger('ha_stt')->unsigned()->default('1')->comment('Số thứ tự # Số thứ tự hình ảnh của nhà trọ');
            $table->string('ha_ten', 150)->comment('Tên hình ảnh # Tên hình ảnh (không bao gồm đường dẫn)');
            
            $table->primary(['nt_ma', 'ha_stt']);
            $table->foreign('nt_ma')->references('nt_ma')->on('nhatro')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `nhatro` comment 'Hình Ảnh Nhà Trọ'");
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
