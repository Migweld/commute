<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commutes', function (Blueprint $table) {
            $table->string('to');
            $table->string('from');
            $table->string('to_latlng');
            $table->string('from_latlng');
            $table->datetime('start');
            $table->datetime('arrival');
            $table->integer('duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commutes');
    }
}
