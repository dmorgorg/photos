<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;


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
        $images = \App\Image::paginate(48);
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



        // get list of tags
        $tagModel = new \App\Tag();
        $tags_for_dropdown = $tagModel->getTagsForDropdown();

        return view('images.create')
        ->with('countries_for_dropdown', $countries_for_dropdown)
        ->with('tags_for_dropdown', $tags_for_dropdown);
    }


    public function postCreate(Request $request){
        $filename;
        $image;
        $image_info;

        $this->validate($request, [
            'file_input'     => 'required|image|mimes:jpeg,png|min:1|max:2000',
            'country_input'  => 'required',
            'date_input'     => 'required|date',
            'tag_input'      => 'required',
            'caption_input'  => 'required',
            'rename'         => 'required'
        ]
    );

    // got help here from http://the-amazing-php.blogspot.ca/2015/06/laravel-5.1-image-gallery-crud.html
    $image = $request->file('file_input');
    // if $request->checkbox exists, then it is 'on' and we have permission to rename
    if($request->checkbox){
        $filename = $request->rename;
    } else {
        $filename = $image->getClientOriginalName();
    }

    //check if file already exists
    if(file_exists('images/full/'.$filename)){
        // do nothing for now; on todo list :(
    }

    // resize the image and store in appropriate directories
    $img = \Image::make($image);
    $img->save('images/full/'.$filename);
    $img->heighten(900)->save('images/large/'.$filename);
    $img->heighten(600)->save('images/med/'.$filename);
    $img->heighten(150)->save('images/thumbs/'.$filename);

    $user = \Auth::user()->name;
    \Session::flash('flash_message', $user.': Successful upload. You may continue.');

    return redirect('images/create');
} // end postCreate
}
