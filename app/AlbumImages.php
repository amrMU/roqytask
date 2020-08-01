<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumImages extends Model
{
    protected $table = "album_images";
    protected $fillable = [
    	'image',
		'album_id',
    ];
}
