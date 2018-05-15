<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaidangtaikhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidangtaikhoan', function (Blueprint $table) {
            $table->unsignedInteger('id')->comment('Tài Khoản bình luận');
            $table->unsignedBigInteger('bd_ma')->comment('Mã Bài đăng');
            $table->foreign('bd_ma')->references('bd_ma')->on('baidang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baidangtaikhoan');
    }
}
