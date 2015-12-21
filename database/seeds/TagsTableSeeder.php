<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $tags = [
            'Bangkok',
            'Bilbao',
            'Buddhism',
            'Camino del Norte',
            'Camino Ingl&egrave;s',
            'Chenab Valley',
            'Chiang Mai',
            'climbing',
            'cycling',


            'Delhi',
            'gold',
            'Himachal Pradesh',
            'holy man',
            'Jammu & Kashmir',
            'Indian Railways',
            'Kangra Valley',
            'Keylong',
            'Khardung',
            'Khardung La',
            'Kunzum La',
            'Ladakh',
            'Leh',
            'monastery',
            'mural',
            'narrow-gauge',
            'Nubra Valley',
            'Orissa',
            'Panji Valley',
            'pedal-powered',
            'portrait',
            'prayer flags',
            'prayer wheel',
            'Sinthan Top',
            'Spiti',
            'Srinagar',
            'Stanage',
            'Tamil Nadu',
            'trohloff',
            'West Bengal'
        ];

        foreach($tags as $tagName){
            $tag = new \App\Tag();
            $tag -> name = $tagName;
            $tag -> save();
        }
    }
}
