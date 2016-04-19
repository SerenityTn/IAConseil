<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('users')->insert([
    			'nom' => 'Administrateur',
    			'email' => 'admin@gmail.com',
    			'password' => bcrypt('aspirine'),
    			'role' => 1,
    			'created_at' => Carbon::now()
    	]);
    	DB::table('users')->insert([
    			'nom' => 'Expert',
    			'email' => 'expert@gmail.com',
    			'password' => bcrypt('aspirine'),
    			'role' => 2,
    			'created_at' => Carbon::now()
    	]);
    	DB::table('users')->insert([
    			'nom' => 'Client',
    			'email' => 'client@gmail.com',
    			'password' => bcrypt('aspirine'),
    			'role' => 3,
    			'created_at' => Carbon::now()
    	]);    	
    }
}
