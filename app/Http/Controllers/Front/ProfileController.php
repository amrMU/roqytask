<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class ProfileController extends Controller
{


	public $view = 'front.';

    public function getProfile()
    {
    	$this->data['user'] = User::find(Auth::id());
    	return view($this->view.'profile',$this->data);
    }

    public function postProfile()
    {
    	User::find(Auth::id())->update([
    		 'name'=>$request->name,
            'email'=>$request->email,
    	]);
    	 if($request->has('password')){
            User::find($user_id)->update([
                'password'=>bcrypt($request->password),
            ]);
        }

        Session::flash('success',trans('home.message_success'));
        return redirect()->back();
    }
}
