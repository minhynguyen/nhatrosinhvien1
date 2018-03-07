<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterNhatroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nhatro', function (Blueprint $table) {
            $table->unsignedTinyInteger('lnt_ma')->comment('Mã Loại Nhà Trọ');
            $table->foreign('lnt_ma')->references('lnt_ma')->on('loainhatro')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nhatro', function (Blueprint $table) {
            //
        });
    }
}
