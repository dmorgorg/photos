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
        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '123.jpg',
            'date_taken'    => '1984-2-12',
            'narrative'     =>  'happy snap'
        ]);

        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '234.jpg',
            'date_taken'    => '1985-2-12',
            'narrative'     =>  'another happy snap'
        ]);

        DB::table('images')->insert([
            'created_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'    => Carbon\Carbon::now()->toDateTimeString(),
            'filename'      => '345.jpg',
            'date_taken'    => '1984-2-12',
            'narrative'     =>  'more of the same'
        ]);
    }
}
