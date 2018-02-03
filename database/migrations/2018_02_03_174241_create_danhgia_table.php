<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('danhgia', function (Blueprint $table) {
            $table->unsignedInteger('id')->comment('Tài Khoản đánh giá');
            $table->unsignedBigInteger('nt_ma')->comment('Mã Nhà Trọ');
            $table->integer('dg_stt')->unsigned()->comment('Stt đánh giá');
            $table->text('dg_noidung')->comment('Nội Dung đánh giá');
            $table->timestamp('dg_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            $table->primary(['nt_ma', 'id', 'dg_stt']);

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
        Schema::dropIfExists('danhgia');
    }
}
