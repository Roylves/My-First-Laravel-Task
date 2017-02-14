<?php

namespace App\Http\Controllers;
use App\Role;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function getRole()
    {
    	// dump(Role::all());
  //   	$roles = Role::where('id',">",0) //This is where logic goes (>,<,=)
  //   									 //follow the order from roles database
  //   					->orderBy('name','DESC') //DESC is an order from description number of words
  //   					->take(2)
  //   					->get();
  //   	foreach ($roles as $role) {
  //   		echo $role->name."<br>";
		// }

		//Fast speed processing
		// Role::chunk(100, function ($roles) {
		// 	foreach ($roles as $key => $value) {
		// 		echo $value->name."<br>";
		// 	}
		// });

		//Retrieve an ID from single database
			// $role = Role::find([2,3]);
			// dump($role);
		// $role = Role::find(2);
		// echo $role->name;

		//If no values found, pages shows no result
		// $role = Role::findOrFail(10);
		// dump($role);

    	//Count numbers of contents inside roles database
    	echo Role::count();
		// echo Role::where('name','like','%A%')->count(); //count name that has A/a
    }

    public function insert()
    {
    	$role = new Role();
    	$role->name = $request->name;
    	$role->save();
    }

        public function update()
    {
    	$role = Role::find(3);
    	$role->name = 'new name';
    	$role->save();
    }

    //Create new id with new contents if dont have at database,
    //If have, then only update the contents of that id inside that database
    public function updateOrCreate()
    {
    	$roles = Role::updateOrCreate(['id'=>10],['name'=>'Ceo','description'=>'This is ceo']);
    	dump($roles);
    }
}
