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
            'camino del norte',
            'camino ingles',
            'cycling',
            'climbing',
            'Bangkok',
            'Bilbao',
            'Buddhism',
            'Chiang Mai',
            'Delhi',
            'gold',
            'Himachal Pradesh',
            'holy man',
            'Jammu & Kashmir',
            'Indian Railways',
            'Keylong',
            'Khardung',
            'Khardung La',
            'Kunzum La',
            'Ladakh',
            'Leh',
            'narrow-gauge',
            'Nubra Valley',
            'monastery',
            'mural',
            'pedal-powered',
            'portrait',
            'prayer flags',
            'prayer wheel',
            'Sinthan Top',
            'Spiti',
            'Stanage',
            'Tamil Nadu',
            'trohloff'
        ];

        foreach($tags as $tagName){
            $tag = new \App\Tag();
            $tag -> name = $tagName;
            $tag -> save();
        }
    }
}
