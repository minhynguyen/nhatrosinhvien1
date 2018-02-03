<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhatroTienichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhatro_tienich', function (Blueprint $table) {
            $table->Biginteger('nt_ma')->unsigned()->comment('Mã nhà trọ');
            $table->Tinyinteger('ti_ma')->unsigned()->comment('Mã tiện ích');
            $table->primary(['nt_ma', 'ti_ma']);

            $table->foreign('nt_ma')->references('nt_ma')->on('nhatro')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('ti_ma')->references('ti_ma')->on('tienich')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhatro_tienich');
    }
}
