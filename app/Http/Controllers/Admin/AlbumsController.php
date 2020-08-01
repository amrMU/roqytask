<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Albums,App\AlbumImages;
use Session;
class AlbumsController extends Controller
{
    public $view = 'dashboard.albums.';

    public function index()
    {
    	$this->data['albums'] = Albums::paginate(30);
    	return view($this->view.'index',$this->data);
    }

    public function destroy($id)
    {

    	$images = AlbumImages::where('album_id',$id)->get();
    	if($images->count() > 0){
	    	foreach ($images as $key => $image) {
	    	@unlink(public_path($path = '/uploads/albums/org/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/50x50/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/150x100/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/150x150/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/200x150/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/200x200/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/250x100/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/300x200/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/300x300/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/421x589/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/500x300/').$image->image);
	    	@unlink(public_path($path = '/uploads/albums/500x500/').$image->image);
	    	}
    	}
    	Albums::destroy($id);
    	 Session::flash('success',trans('home.message_success'));
    	return redirect()->back();
    }
}
