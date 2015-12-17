<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function image(){
        # Country has many images
        return $this->hasMany('\App\Image');
    }

    public function getCountriesForDropdown(){

        $countries = $this->orderBy('country', 'ASC')->get();

        $countriesForDropdown = [];

        foreach($countries as $country){
            $countriesForDropdown[$country['id']] = $country->country;
        }

        return $countriesForDropdown;

    }
}
