<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
 
	
	    DB::table('users')->insert([
            'email'    => 'admin@gmail.com',
        'password' => Hash::make('admin')
        ]);
	
}

}