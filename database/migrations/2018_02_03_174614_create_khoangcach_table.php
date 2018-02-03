<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoangcachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoangcach', function (Blueprint $table) {
            $table->Biginteger('nt_ma')->unsigned()->comment('Mã nhà trọ');
            $table->TinyInteger('t_ma')->unsigned()->comment('Mã Trường');
            $table->double('kc_giatri',20,10)->comment('Khoảng cách từ nhà trọ đến trường học');
            $table->primary(['nt_ma', 't_ma']);

            $table->foreign('nt_ma')->references('nt_ma')->on('nhatro')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('t_ma')->references('t_ma')->on('truong')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khoangcach');
    }
}
