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
        $date_id = \App\Date::where('date', '=', '2014-07-29')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2014-07-29-1270.jpg',
            'caption'       => 'Keylong, 2014',
            'narrative'     => 'Out for a stroll with Vortex, north towards Leh',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2014-07-23')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => "2014-07-23-1045.jpg",
            'caption'       => 'Brian Neill, 2014',
            'narrative'     => 'Beautiful, remote, wonderful...',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-10')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => "2013-06-10-0928.jpg",
            'caption'       => 'A Monastery',
            'narrative'     => '',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2014-07-23')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => "2014-07-23-1015.jpg",
            'caption'       => 'Brian Neill, 2014',
            'narrative'     => 'Beautiful, remote, wonderful...',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-09')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-09-0871.jpg',
            'caption'       => 'Leh',
            'narrative'     =>  'once upon a time....',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-02')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-02-0157.jpg',
            'caption'       => 'Indian Railways',
            'narrative'     =>  'On the narrow-gauge line at Jogindernagar.',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-07')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-07-0712.jpg',
            'caption'       => 'Prayer Flags',
            'narrative'     =>  'The view from my breakfast table.',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-07')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-07-0749.jpg',
            'caption'       => 'Prayer Flags',
            'narrative'     =>  '',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-12')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-12-1101.jpg',
            'caption'       => 'Village wall, wood and sky',
            'narrative'     =>  '',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-14')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-14-1448.jpg',
            'caption'       => 'The road up to the Khardung La',
            'narrative'     =>  'Getting high',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-15')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-15-1607.jpg',
            'caption'       => 'Khardung Village',
            'narrative'     =>  '',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-15')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-15-1625.jpg',
            'caption'       => 'Khardung Village',
            'narrative'     =>  '',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-16')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-16-1701.jpg',
            'caption'       => 'Clearing skies, from my hotel balconey',
            'narrative'     =>  '',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);

        $date_id = \App\Date::where('date','=','2013-06-16')->pluck('id');
        $country_id = \App\Country::where('country', '=', 'India')->pluck('id');
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '2013-06-16-1706.jpg',
            'caption'       => 'Sand dunes and scree, Hunder, Nubra Valley',
            'narrative'     =>  '',
            'date_id'       => $date_id,
            'country_id'    => $country_id,
        ]);




    }
}
