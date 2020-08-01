<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Albums,App\AlbumImages;
use App\Http\Requests\Front\AlbumRequest;
use App\Http\Controllers\ImagesController;
use Session;
use Auth;
class AlbumsController extends Controller
{
	public $view = 'front.albums.';
    
    public function __construct(Albums $model)
	{
		$this->model = $model;
    }	
    
    public function index()
    {
    	$this->data['albums'] = $this->model->all();
    	return view($this->view.'index',$this->data);
    }

    public function create()
    {
    	return view($this->view.'create');
    }

    public function store(AlbumRequest $request)
    {
    	$album = $this->model->create([
    		'name'=>$request->name,
    		'content'=>$request->content,
    		'status'=>$request->status,
    		'user_id'=>Auth::id(),
    	]);
    	$upload  = ImagesController::upload_multiple($request->images,'uploads/albums');

    	foreach ($upload as $key => $image) {
    		$images = AlbumImages::create([
    			'image'=>$image,
    			'album_id'=>$album->id
    		]);
    	}
        Session::flash('success',trans('home.message_success'));
    	return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['album'] = $this->model->where('id',$id)->where('user_id',Auth::id())->first();
        if ($this->data['album'] == null) {
            return abort(403);
        }
        return view($this->view.'edit',$this->data);
    }

    public function update($id,AlbumRequest $request)
    {
        $album = $this->model->where('id',$id)->where('user_id',Auth::id())->update([
            'name'=>$request->name,
            'content'=>$request->content,
            'status'=>$request->status,
            'user_id'=>Auth::id(),
        ]);

        if ($request->hasFile('images')) {
           $images =  AlbumImages::where('album_id',$id)->get();
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
            
            AlbumImages::where('album_id',$id)->delete();

            }
            $upload  = ImagesController::upload_multiple($request->images,'uploads/albums');

            foreach ($upload as $key => $getImage) {
                $images = AlbumImages::create([
                    'image'=>$getImage,
                    'album_id'=>$id
                ]);
            }
        }
        Session::flash('success',trans('home.message_success'));
        return redirect()->back();
    }


    public function destroy($id)
    {

    	$images = AlbumImages::where('album_id',$id)->get();
    	if($images->count() > 0){
	    	foreach ($images as $key => $image) {
	    	unlink(public_path($path = '/uploads/albums/org/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/50x50/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/150x100/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/150x150/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/200x150/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/200x200/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/250x100/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/300x200/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/300x300/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/421x589/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/500x300/').$image->image);
	    	unlink(public_path($path = '/uploads/albums/500x500/').$image->image);
	    	}
    	}
    	$this->model->find($id)->delete();
    	 Session::flash('success',trans('home.message_success'));
    	return redirect()->back();
    }
}
