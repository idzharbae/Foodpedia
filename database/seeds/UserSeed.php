<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
    		[
    			'name'			=> 'admin',
    			'password'		=> bcrypt("secret"),
    			'email'			=> 'coba@coba.com',
    		]
    	]);
    }
}
