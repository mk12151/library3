<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResursiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resurs', function (Blueprint $table) {
            $table->increments('id');  
            $table->timestamps();         
           $table->string('autors')->nullable(); // VARCHAR 255
           $table->integer('gads')->unsigned()->nullable();
           $table->string('nosaukums', 100); // VARCHAR 100
           $table->string('formats', 60); // VARCHAR 60
           $table->string('udk', 60); // VARCHAR 60
           $table->string('atslegvardi', 100); // VARCHAR 100
           $table->integer('lpp')->unsigned();
            $table->integer('gramata_id')->unsigned()->nullable();
            $table->foreign('gramata_id')->references('id')->on('gramata'); 
            $table->integer('zurnals_id')->unsigned()->nullable();
            $table->foreign('zurnals_id')->references('id')->on('zurnals');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resurs');
    }
}
