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
        $date_id = \App\Date::where('date', '=', '2013-06-12')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        dump($country_id);
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'caption'       => 'Kashmir',
            'narrative'     => 'balh blah blah',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-16')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => "some.jpg",
            'caption'       => 'India',
            'narrative'     => 'maybe lorem ipsum here',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-09')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '123.jpg',
            'caption'       => 'Ladakh',
            'narrative'     =>  'once upon a time....',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);


    }
}
