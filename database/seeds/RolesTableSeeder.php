<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Insert what in here into roles database
        Role::insert([['name'=>'Admin','description'=>'This is admin'],
        			  ['name'=>'Virector','description'=>'This is virector'],
        			  ['name'=>'Manager','description'=>'This is manager']
        			]);
    }
}
