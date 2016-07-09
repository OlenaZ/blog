<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    
        'title',
        'subtitle',
        'beginning',
        'body',
        'image',
        'publish'
    ];

    public function tags()
    {
	    return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function getTagListAttribute()

    {
        return $this->tags->lists('id')->all();
    }

}
 
