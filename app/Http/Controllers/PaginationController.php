<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
// use DB;

class PaginationController extends Controller
{
    public function pagination()
    {
    	// $users = DB::table('users')->simplePaginate(1);
    	// $users = user::paginate(2);
    	//Below is how to combine pagination + join
    	$users = User::join('roles','roles.id','=','users.role_id')
    	->select('users.*', 'roles.name as rolename')
    	->paginate(2);

    	return view('user.pagination',compact('users'));
    }
}
