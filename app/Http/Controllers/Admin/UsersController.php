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
use App\Http\Requests\Admin\UserRequest;
use App\User,App\AdministrationGroup;
use Session;
use DB;
use Auth;

class UsersController extends Controller
{
    public $view = 'dashboard.users';
    
    public function __construct(User $user)
	{
		$this->user = $user;
    }	
    

   

    public function index(Request $request)
    {
        $users = $this->user->paginate(30);
       

        return view($this->view.'.index',compact('users'));
    }

    public function create(Request $request)
    {
        $this->data['adminstration_groups']= AdministrationGroup::all();
        return view($this->view.'.create',$this->data);
        
    }

    public function store(UserRequest $request)
    {
       
        $insert = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
           'administration_group_id'=>$request->administration_group_id,
           'type_user'=>$request->type_user
          ]);

        if($request->hasFile('image')){
            $file =$request->file('image'); 
			$time = time();
			$ext = $file->getClientOriginalExtension();
			$fullname = $time . '.' . $ext;
            $move = $file->move(public_path() .'/uploads/images/users', $fullname);
            $path ='/uploads/images/users';
            $image = $path.'/'.$fullname;
            User::where('id',$insert->id)->update(['image'=>$image]);
        }
       
        Session::flash('success',trans('home.message_success'));
        return redirect()->back();        
    }

    public function edit($id,Request $request)
    {
      
        $this->data['info'] = User::find($id);
        $this->data['adminstration_groups']= AdministrationGroup::all();
       
        return view($this->view.'.edit',$this->data);
        
    }

    public function show()
    {
        # code...
    }

    public function update($user_id,UserRequest $request)
    {
        $update = User::find($user_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'administration_group_id'=>$request->administration_group_id,
            'type_user' => $request->type_user
            
        ]);

        if($request->has('password')){
            User::find($user_id)->update([
                'password'=>bcrypt($request->password),
            ]);
        }

        if($request->hasFile('image')){
            $file =$request->file('image'); 
			$time = time();
			$ext = $file->getClientOriginalExtension();
			$fullname = $time . '.' . $ext;
            $move = $file->move(public_path() .'/uploads/images/users', $fullname);
            $path ='/uploads/images/users';
            $image = $path.'/'.$fullname;
            User::where('id',$user_id)->update(['image'=>$image]);
        }

        $data_track = User::find($user_id);
       
        Session::flash('success',trans('home.message_success'));
        return redirect()->back();  
    }
}
