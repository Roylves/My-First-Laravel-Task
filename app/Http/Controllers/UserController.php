<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function index(){
    	return view('welcome');
    }

    // public function getUser($id)
    public function getUser()
    {
    	// $users = DB::table('users')->get();
    	$users = user::get();
    	// Use where to specific retrieve record
    	dump($users);
    	// $user = DB::table('users')->where('id',$id)->value('name');
    	// $user = DB::table('users')->where('id',$id)->first();
    	// $user = DB::table('users')->where('id')->first();
    	// $names = DB::table('roles')->pluck('name');
    	$user = user::where('id')->first();
    	$names = role::pluck('name');
    	//get data inside view\user\index
        return view('user.index', ['users' => $users, 
        						   'singleUser'=>$user,
        						   	'roles'=>$names]);
    }

    public function aggregate() 
    {
    	// $users = DB::table('users')->count();
    	$users = user::count();
    	echo $users;
    }

    public function join()
    {	
    	// Join together of more than 1 class
    	// $users = DB::table('users')->join('roles','roles.id','=','users.role_id')
    	$users = user::join('roles','roles.id','=','users.role_id')
    	// to select a CLASS inside specific database
    	//can assign class name inside specific database as new class name to let that class be use with another database
    	//if not, class from other database cannot be use with another database
    	->select('users.*', 'roles.name as rolename')
    	->get();

    	return view('join.join',compact('users'));
    }

   	public function union()
   	{
   		// $users = DB::table('users')->select('name');
   		// $union = DB::table('roles')->select('name')
   		$users = user::select('name');
   		$union =role::select('name')
   			
   			->union($users)

   			->get();
   		//union will eliminate duplicate name -> end up as 1 name
   		//union all will show duplicate name
   		return view('union.union',compact('union'));
   	}
}
