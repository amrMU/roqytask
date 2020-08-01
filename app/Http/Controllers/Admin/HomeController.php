<?php
/*
*********************************
* Name: Amr Muhamed             *
* Email: amrmuhamed9@gmail.com  *
* Phone: +201061637022          *
* Copywrits @amrMU Githup       *
* *******************************
*/
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User,App\Albums;
use Auth;
class HomeController extends Controller
{
	public function __construct(User $user)
	{
		$this->user = $user;
	}	
	public $view = 'dashboard';

    public function index(Request $request)
    {
    	$this->data['albums'] =Albums::all(); 
    	$this->data['users'] =User::all(); 
    	return view($this->view.'.index',$this->data);
    }
}
