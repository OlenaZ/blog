<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
    
        'album_id',
        'description',
        'image'
    ];

    public function posts()
    {
    	return $this->belongsTo('App\Post');
    }
}
