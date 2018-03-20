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
            $table->unsignedInteger('nt_giathue')->default('0')->comment('Giá cho thuê');
            $table->dropColumn('nt_thongtin');
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
