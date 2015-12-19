<?php

use Illuminate\Database\Seeder;

class ImageTagTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // Create an array of the images we want to associate tags with.
        $images = [
            "2014-07-23-1015.jpg" =>['Spiti', 'Himachal Pradesh', 'trohloff'],
            "2014-07-23-1045.jpg" =>['Spiti', 'Himachal Pradesh', 'trohloff'],
            "2014-07-29-1270.jpg" =>['Keylong', 'Himachal Pradesh', 'trohloff'],
            "2013-06-09-0871.jpg" =>['Leh', 'Himachal Pradesh', 'Ladakh'],
            "2013-06-02-0157.jpg" =>['Indian Railways', 'Himachal Pradesh', 'narrow-gauge'],
            "2013-06-07-0712.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Buddhism', 'prayer flags', 'Leh'],
            "2013-06-07-0749.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Buddhism', 'prayer flags', 'Leh'],
            "2013-06-10-0928.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Buddhism', 'monastery'],
            "2013-06-12-1101.jpg" =>['Ladakh', 'Jammu & Kashmir'],
            "2013-06-14-1448.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Khardung La', 'Leh'],
            "2013-06-15-1607.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Khardung', 'Buddhism'],
            "2013-06-15-1625.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Khardung'],
            "2013-06-16-1701.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Nubra Valley'],
            "2013-06-16-1706.jpg" =>['Ladakh', 'Jammu & Kashmir', 'Nubra Valley']
        ];

        // Loop through the above array, creating a new pivot for each image to a tag
        foreach($images as $filename => $tags){

            $image = \App\Image::where('filename', 'like', $filename)->first();



            foreach($tags as $tagName){
                $tag = \App\Tag::where('name', 'LIKE', $tagName)->first();
                $image->tags()->save($tag);
            }

        }
    }
}
