<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function image(){
        # Date has many images
        return $this->hasMany('\App\Image');
    }
}
