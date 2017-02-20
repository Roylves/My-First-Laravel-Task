<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class CrudAjaxController extends Controller
{
    public function index()
	{
	    $users = User::join('roles','roles.id','=','users.role_id')
    	->select('users.*', 'roles.name as rolename')
    	->paginate(2);
    	$roles = Role::all();
    	return view('backend.employees',compact('users','roles'));
	}
	 
	//--CREATE a link--//
	public function create(Request $r)
	{
	    $user = User::create($r->all());
    	return \Response::json($user);
	}
	 
	//--GET LINK TO EDIT--//
	//$name_id -> that 'name' can be of any words
	//If want change $name_id to $user_id , all related files that have $name_id
	//must be replace with $user_id. Ex: in js, route, and blade.php
	public function edit($user_id)
	{
	    $user = User::find($user_id);
    	return \Response::json($user);
	}
	 
	//--UPDATE a link--//
	// Dont forget change edit data follow database class or edit save will not work
	//$r stand for $request, since $request wont work in controller
	public function update(Request $r)
	{
	    $user = User::find($r->user_id);
    	$user->name = $r->name;
    	$user->email = $r->email;
    	$user->company_name = $r->company_name;
    	$user->contact_number = $r->contact_number;
    	$user->role_id = $r->role_id;
    	$user->password = $r->password;
    	$user->save();
    	return \Response::json($user);
	}
	 
	//--DELETE a link--//
	public function delete($user_id)
	{
	    $user = User::destroy($user_id);
    	return \Response::json($user);
	}
}
