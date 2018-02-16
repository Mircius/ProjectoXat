<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {

	    $table->increments('id');
            $table->timestamps();
            $table->string('street');
            $table->string('city');
            $table->string('title');
            $table->integer('postal_code');
            $table->string('description');
	    $table->integer('id_user')->unsigned();
	    $table->foreign('id_user')->references('id')->on('users');
	    $table->string('imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
