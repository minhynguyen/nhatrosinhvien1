<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoainhatroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loainhatro', function (Blueprint $table) {
            $table->unsignedTinyInteger('lnt_ma')->autoIncrement()->comment('Mã Loại Nhà Trọ');
            $table->string('lnt_ten', 50)->comment('Tên Loại Nhà Trọ');
            $table->timestamp('lnt_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo Loại nhà trọ');
            $table->timestamp('lnt_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật loại nhà trọ gần nhất');
            $table->tinyInteger('lnt_trangthai')->default('2')->comment('Trạng thái # Trạng thái chủ đề: 1-khóa, 2-khả dụng');
            
            $table->unique(['lnt_ma', 'lnt_ten']);
        });
        DB::statement("ALTER TABLE `loainhatro` comment 'Loại Nhà Trọ: Nhà riêng, phòng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loainhatro');
    }
}
