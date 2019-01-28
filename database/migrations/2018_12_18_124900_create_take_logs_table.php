<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('portion_id');
            $table->timestamp('taked_at');
            $table->integer('portion');
            $table->timestamps();

            $table->foreign('portion_id')->references('id')->on('portions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('take_logs');
    }
}
