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
            $table->unsignedInteger('nt_tinhtrang')->default('1')->comment('Tình Trạng: còn phòng hét phòng');
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
