<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('image_tag', function(Blueprint $table){
             $table->increments('id');
             $table->timestamps();

             # image_id and tag_id will be foreign key_exists
             # image_id will reference the images table
             # tag_id will reference the tags table
             $table->integer('image_id')->unsigned();
             $table->integer('tag_id')->unsigned();

             # make the foreign keys
             $table->foreign('image_id')->references('id')->on('images');
             $table->foreign('tag_id')->references('id')->on('tags');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('image_tag');
     }
}
