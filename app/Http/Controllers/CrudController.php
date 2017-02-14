<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class CrudController extends Controller
{
    public function getInsert()
    {
    	$roles = Role::all();
    	return view('user.getInsert',compact('roles'));
    }

    public function postInsert(Request $r)
    {
    	User::insert(['name'=>$r->name,
    				  'email'=>$r->email,
    				  'password'=>$r->password,
    				  'role_id'=>$r->role_id]);
    	return redirect('pagination'); //redirect = refer to the url at route/web.php

    }

    public function getUpdate($id)
    {
    	$user = User::find($id);
    	$roles = Role::all();
    	return view('user.getUpdate',compact('user','roles'));

    }

    public function postUpdate(Request $r)
    {
    	$user = User::find($r->id);
    		$user->name =$r->name;
    		$user->email =$r->email;
    		$user->role_id =$r->role_id;
    	$user->save();
    	return redirect('pagination'); //redirect = refer to the url at route/web.php

    }

    public function postDelete($id)
    {
    	User::destroy($id);
    	return back();

    }
}