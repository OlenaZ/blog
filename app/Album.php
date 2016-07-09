<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
    
        'title',
        'description',
        'cover_image',
        'size'
    ];

    public function photos()
    {
	    return $this->hasMany('App\Photo');
    }
}
