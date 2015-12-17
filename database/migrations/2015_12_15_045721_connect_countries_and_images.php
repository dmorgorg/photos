<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectCountriesAndImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('images', function (Blueprint $table) {

             # Add a new INT field called `date_id` that has to be unsigned (i.e. positive)
             $table->integer('country_id')->unsigned();

             # This field `date_id` is a foreign key that connects to the `id` field in the `dates` table
             $table->foreign('country_id')->references('id')->on('countries');

         });
     }


     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('images', function (Blueprint $table) {

             # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
             # combine tablename + fk field name + the word "foreign"
             $table->dropForeign('images_country_id_foreign');

             $table->dropColumn('country_id');
         });
     }
}
