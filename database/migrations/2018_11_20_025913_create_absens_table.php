<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_staff');
            $table->dateTime('jam_dateng')->nullable();
            $table->dateTime('jam_pulang')->nullable();
            $table->integer('status')->nullable();// null = blm, 0 dateng, 1 pulang
            $table->timestamps();
            $table->foreign('id_staff')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absens');
    }
}
