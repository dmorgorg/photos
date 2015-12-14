<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;


class ImagesController extends Controller
{
    /**
    * Create a new images controller instance
    */
    public function __construct()
    {
        $this->middleware('auth');
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

        // get list of tags?
        // $tags = Tag::lists('tagname', 'id');
        // dump($tags);
        //
        return view('images.create');
    }

    public function getConfirm(){

    }

}
