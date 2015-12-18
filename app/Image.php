<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function date(){
        return $this->belongsTo('\App\Date');
    }

    public function country(){
        return $this->belongsTo('\App\Country');
    }

    public function tags(){
        return $this->belongsToMany('\App\Tag')->withTimestamps();
    }
}
