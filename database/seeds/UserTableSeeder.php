<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Alan Moreira',
            'email' => 'ciceroalan2003@gmail.com',
            'password' => Hash::make('alan1234'),
			'remember_token'=> now(),
			'created_at'=> now(),
        ]);
		
		
    }
}
