<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $table = 'albums';
    protected $fillable = [
    	'name',
    	'content',
    	'status',
    	'user_id',
    ];

    public function images()
    {
    	return $this->hasMany('App\AlbumImages','album_id');
    }
}

