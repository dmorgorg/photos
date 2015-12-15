<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $date_id = \App\Date::where('first_name', '=', '2013-06-09')->pluck('id');
        dump($date_id);
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-12-123.jpg',
            //'date_id'    => $date_id,
            'narrative'     =>  'happy snap',
            'title'         =>  'titleist'
        ]);

        // $date_id = \App\Date::where('date', '=', '2013-06-16')->pluck('id');
        // DB::table('images')->insert([
        //     'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
        //     'filename'      => '22013-06-16-034.jpg',
        //     'date_taken'    => $date_id,
        //     'narrative'     =>  'another happy snap',
        // ]);
        //
        // $date_id = \App\Date::where('date', '=', '2013-06-09')->pluck('id');
        // DB::table('images')->insert([
        //     'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
        //     'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
        //     'filename'      => '2013-06-09-345.jpg',
        //     'date_taken'    => $date_id,
        //     'narrative'     =>  'more of the same',
        // ]);



    }
}
