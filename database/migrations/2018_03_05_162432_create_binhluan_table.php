<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->unsignedInteger('id')->comment('Tài Khoản bình luận');
            $table->unsignedBigInteger('bd_ma')->comment('Mã Bài đăng');
            $table->unsignedInteger('bl_stt')->comment('Stt Bình Luận');
            $table->text('bl_noidung')->comment('Nội Dung bình luận');
            $table->timestamp('bl_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            
            $table->primary(['bd_ma', 'id', 'bl_stt']);
            $table->foreign('bd_ma')->references('bd_ma')->on('baidang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('binhluan');
    }
}
