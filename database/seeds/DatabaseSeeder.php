<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Insert manually data into users database
        factory('App\User')->create([
        		'role_id'=>2,
        		'name'=>'Roy',
        		'email'=>str_random(10),
        		'password'=>bcrypt('secret'),
        		'remember_token'=>str_random(10)
        	]);
    }
}
