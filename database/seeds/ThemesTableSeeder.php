<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ThemesTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('themes')->insert([
    			'name' => "Général",
    			'created_at' => Carbon::now()
    	]);
    	
    	DB::table('themes')->insert([
    			'name' => "News",   
    			'created_at' => Carbon::now()
    	]);
    }
}
