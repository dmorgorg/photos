<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDatesAndImages extends Migration
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
            $table->integer('date_id')->unsigned();

            # This field `date_id` is a foreign key that connects to the `id` field in the `dates` table
            $table->foreign('date_id')->references('id')->on('dates');

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
            $table->dropForeign('images_date_id_foreign');

            $table->dropColumn('date_id');
        });
    }
}
