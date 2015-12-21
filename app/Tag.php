<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function images(){
        return $this->belongsToMany('\App\Image')->withTimestamps();
    }

    public function getTagsForDropdown(){

        $tags = $this->orderBy('name', 'ASC')->get();

        $tagsForDropdown = [];

        foreach($tags as $tag){
            $tagsForDropdown[$tag['id']] = $tag->name;
        }

        return $tagsForDropdown;

    }
}
