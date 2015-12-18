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
            'Chiang Mai',
            'Delhi',
            'gold',
            'Himachal Pradesh',
            'holy man',
            'Jammu & Kashmir',
            'Keylong',
            'Khardung',
            'Khardung La',
            'Kunzum La',
            'Ladakh',
            'Leh',
            'Nubra Valley',
            'mural',
            'pedal-powered',
            'portrait',
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
