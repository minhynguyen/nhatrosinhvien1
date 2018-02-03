<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaibaidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaibaidang', function (Blueprint $table) {
            $table->unsignedTinyInteger('lbd_ma')->autoIncrement()->comment('Mã chủ đề');
            $table->string('lbd_ten', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->timestamp('lbd_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chủ đề');
            $table->timestamp('lbd_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chủ đề gần nhất');
            $table->tinyInteger('lbd_trangthai')->default('2')->comment('Trạng thái # Trạng thái chủ đề: 1-khóa, 2-khả dụng');
            
            $table->unique(['lbd_ma', 'lbd_ten']);
        });
        DB::statement("ALTER TABLE `loaibaidang` comment 'bài đăng tin ở ghép, ...'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaibaidang');
    }
}
