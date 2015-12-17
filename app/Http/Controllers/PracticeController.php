<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PracticeController extends Controller
{
    function getExample5(){
        $date = new \App\Date;
        $date->date = '2013-06-02';
        $date->save();
        dump($date->toArray());
        $country = new \App\Country;
        $country->country = 'India';
        $country->save();
        dump($country->toArray());
        $image = new \App\Image;
        $image->caption = 'Indian Railways';
        $image->narrative = 'Trains running late may catch up time';
        $image->filename = '2013-06-02-0157-1920.jpg';
        $image->date()->associate($date);
        //$image->date_id = $date->id;
        $image->country()->associate($country);
        $image->save();
        dump($image->toArray());
    }


    function getExample4(){
        $images = \App\Image::all();
        echo $images;
        //dump($images);
        foreach($images as $image){
            echo $image['narrative'].'<br>';
        }
        foreach($images as $image){
            echo $image->narrative.'<br>';
        }
    }

    function getExample3(){
        $images = \App\Image::where('date_taken', '<', '2000-00-00')->get();
        foreach($images as $image){
            echo $image -> narrative. '<br>';
        }
        dump($images);
    }

    function getExample2(){
        $image = new \App\Image();

        $image->filename = '565.jpg';
        $image->date_taken = '1911-11-11';
        $image->narrative = "why did I take this?";

        $image->save();

        dump($image);
    }

    // equivalet to SELECT * FROM images
    function getExample1(){
        $images = \DB::table('images')->get();

        foreach($images as $image){
            echo $image -> date_taken. '<br>';
        }

        dump($images);
        // return 'Example1';
    }
}
