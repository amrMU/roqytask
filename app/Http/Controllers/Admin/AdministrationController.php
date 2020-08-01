<?php



namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\AdministrationGroup;
use App\Model\Token;
use Validator;
use App\User;
use Session;

class AdministrationController extends controller
{
 function __construct()
 {
    $this->middleware('perms:permissions_groups');
}



public function group()

{

    $this->data['squence_pages'][trans('dash.permissions_groups')] = route('permissions_groups');
    $this->data['permissions_groups'] = AdministrationGroup::where('permissions', '!=', '*')->get();
    $this->data['table_name'] = trans('dash.permissions_groups');

    return view('dashboard.administration.permissions_groups', $this->data);

}



public function group_create()

{
    return view('dashboard.administration.group_create');
}



public function group_store(Request $request)
{
    $group_data = [

        'name' => $request->name,
        'perms' => $request->perms,
    ];

    $group_rules = [
        'name' => 'required',
        'perms' => 'required',
    ];

    $validator = Validator::make($group_data, $group_rules);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    $administration_group = new AdministrationGroup();
    $administration_group->name = $request->name;

    if ($request->short_desc_ar) {
        $administration_group->description = $request->short_desc_ar;
    }

    if ($request->perms== ["*"]) {
       $administration_group->permissions = "*";
   }else{
    $administration_group->permissions = json_encode($request->perms);
}
$administration_group->created_by = auth()->user()->id;
$administration_group->save();
Session::flash('success','تمت الاضافة بنجاح');
return redirect()->back();

}



public function group_edit($id = 0)

{
    if (!AdministrationGroup::find($id) && AdministrationGroup::find($id)->permissions == "*") {
        return back()->with('class', 'alert alert-danger')->with('message', trans('dash.try_2_access_not_found_content'));
    }

    $group = AdministrationGroup::find($id);


    $this->data['group'] = $group;
    $this->data['perms'] = json_decode($group->permissions);

    return view('dashboard.administration.group_edit', $this->data);

}



public function group_update(Request $request)

{

    $group_data = [

        'administration_group_id' => $request->administration_group_id,

        'name' => $request->name,

        'perms' => $request->perms,

    ];

    $group_rules = [

        'administration_group_id' => 'required|exists:administration_group,id',

        'name' => 'required',

        'perms' => 'required',

    ];

    $validator = Validator::make($group_data, $group_rules);
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }



    $administration_group = AdministrationGroup::find($request->administration_group_id);
    $administration_group->name = $request->name;

    if ($request->short_desc_ar) {
        $administration_group->description = $request->short_desc_ar;
    }

    $administration_group->permissions = json_encode($request->perms);
    $administration_group->created_by = auth()->user()->id;
    $administration_group->save();

    Session::flash('success','تم تعديل البيانات بنجاح');
    return redirect()->back();
}



public function group_delete($id = 0)

{

    $administration_group = AdministrationGroup::where('id', $id)->where('permissions', '!=', "*")->first();

    if (!$administration_group) {

        return back()->with('class', 'alert alert-danger')->with('message', trans('dash.try_2_access_not_found_content'));

    }

        // MK_REPORT('dashboard_delete_group', 'Delete Administration Group Name ' . $administration_group->name_ar, $administration_group);

    $administration_group->delete();



    return redirect()->back();

}



public function admins()

{
    $this->data['admins'] = User::orderBy('created_at','DESC')->get();
    return view('dashboard.administration.admins', $this->data);

}

public function nurses()
{
    $this->data['admins'] = User::all();
    return view('dashboard.administration.admins', $this->data);
}


public function doctor()
{
    $this->data['admins'] = User::where('type','doctor')->get();
    return view('dashboard.administration.admins', $this->data);
}


public function admin_create()
{
    $this->data['permissions_groups'] = AdministrationGroup::all();
    $this->data['countries'] = \App\Model\Country::get();

    return view('dashboard.administration.admin_create', $this->data);
}

public function admin_store(Request $request)

{


   $data=$request->all();

   $admin_rules = [

        // 'administration_group_id' => 'required|exists:administration_group,id',
    'type' => 'required',
    'name' => 'required',
    'mobile' => 'required|unique:users',
    'email' => 'required|unique:users',
            // 'country_id' => 'required|exists:countries,id',
    'password' => 'required|min:6',
    'confirm_password' => 'required|same:password',
];

$validator = Validator::make($data, $admin_rules);

if ($validator->fails()) {

    return back()->withErrors($validator)->withInput();

}

$data['password'] = bcrypt($request->password);

if ($request->has('image')) {

    $image_name = IMAGE_CONTROLLER::upload_single($request->image, 'storage/app/user');

    $data['image'] = $image_name;

}

$user=User::create($data);

$token = new Token();

$token->user_id = $user->id;

$token->jwt = JWTAuth::fromUser($user);

$token->is_logged_in = 'true';

$token->ip = $request->ip();

$token->save();

Session::flash('success','تمت الاضافة بنجاح');

return redirect()->back();

}

public function admin_edit($id = 0)

{

    $admin = User::where('id', $id)->first();

    if (!$admin) {

        return back()->with('class', 'alert alert-danger')->with('message', trans('dash.try_2_access_not_found_content'));

    }
    $this->data['administration_groups'] = AdministrationGroup::all();

    $this->data['admin'] = $admin;

    $this->data['countries'] = \App\Model\Country::get();

    $this->data['permissions_groups'] = AdministrationGroup::all();

    return view('dashboard.administration.admin_edit', $this->data);

}



public function admin_update(Request $request)

{

    if (!$request->admin_id || User::find($request->admin_id)->administration_group_id == null) {

        return back()->with('class', 'alert alert-danger')->with('message', trans('dash.try_2_access_not_found_content'));

    }

    $admin_id = $request->admin_id;

    $data=$request->all();



    $admin_rules = [

        'admin_id' => 'required|exists:users,id',

        'administration_group_id' => 'required|exists:administration_group,id',

        'name' => 'required',

        'mobile' => 'required|unique:users,mobile,' . $admin_id,

        'email' => 'required|unique:users,email,' . $admin_id,

    ];

    $validator = Validator::make($data, $admin_rules);

    if ($validator->fails()) {

        return back()->withErrors($validator)->withInput();

    }

    $admin = User::find($admin_id);



    $data['password'] = bcrypt($request->password);

    if ($request->has('image')) {

        $image_name = IMAGE_CONTROLLER::upload_single($request->image, 'storage/app/user');

        $data['image'] = $image_name;

    }

    $admin->update($data);



    return redirect()->back()

    ->with('swal', trans('dash.date_updated_successfully'))

    ->with('icon', 'success')

    ->with('class', 'alert alert-success')

    ->with('message', trans('dash.date_updated_successfully'));

}


public function admin_delete($user_id)
{
    User::destroy($user_id);
    Session::flash('success',trans('dash.deleted_success'));
    return redirect()->back()  
    ->with('swal', trans('dash.deleted_success'))
    ->with('icon', 'success')
    ->with('class', 'alert alert-success')
    ->with('message', trans('dash.deleted_success'));
}
}

