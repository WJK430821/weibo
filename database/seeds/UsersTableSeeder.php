<?php

use Illuminate\Database\Seeder;
use \App\Model\Register;
use \App\Model\Userinfo;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Userinfo::insert([
			'status' => 0,
			'register_time' => time(),
			]);
			
		Register::insert([
			'register_time' => time(),
			]);
		
    }
}
