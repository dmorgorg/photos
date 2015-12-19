<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\Tag;


class ImagesController extends Controller
{
    /**
    * Create a new images controller instance
    */
    public function __construct()
    {
        // don't set the authentication middleware
        // since guests should have access to the index page
        // $this->middleware('auth');
    }

    /**
    * Show all images
    */
    public function getIndex(){
        $images = \App\Image::all();
         return view('images.index')->with('images', $images);
    }

    /**
    * Show a page to create a new image
    * @return \Response
    */
    public function getCreate(){

        // get list of countries
        $countryModel = new \App\Country();
        $countries_for_dropdown = $countryModel->getCountriesForDropdown();

        // dump($countries_for_dropdown);
        return view('images.create')
            ->with('countries_for_dropdown', $countries_for_dropdown);
    }

    public function getConfirm(){

    }

    public function postCreate(){

    }

}
