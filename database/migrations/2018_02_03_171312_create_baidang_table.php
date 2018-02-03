<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidang', function (Blueprint $table) {
            $table->bigIncrements('bd_ma')->comment('Mã bài đăng');
            $table->unsignedInteger('id')->comment('Tài Khoản đăng bài');
            $table->unsignedTinyInteger('lbd_ma')->comment('Loại Bài Đăng');
            $table->string('bd_tieude', 150)->comment('Tiêu Đề Bài Đăng');
            $table->text('bd_noidung')->comment('Nội Dung Bài Đăng');
            $table->timestamp('bd_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bài đăng');
            $table->timestamp('bd_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật bài đăng gần nhất');
            $table->tinyInteger('bd_trangthai')->default('2')->comment('Trạng thái # Trạng thái bài đăng: 1-duyệt, 2-chưa duyệt');
            $table->unique(['bd_ma']);




            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('lbd_ma')->references('lbd_ma')->on('loaibaidang')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `baidang` comment 'Bài Đăng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baidang');
    }
}
