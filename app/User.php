<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    protected $fillable = [
        'nom','prenom','email', 'password','ville', 'societe','tel', 'role', 'site_web'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function questions(){
    	return $this->hasMany('App\Question')->latest();
    }         
    
    public function question(){
    	return $this->client_questions()->first();
    }
    
    public function client_questions(){
    	return auth()->user()->questions()->where('deleted', '=', '0');
    }
    
    public function check_notif(){
    	return $this->client_questions()->where('notif', '1')->count();
    }
    
    public function filter_questions(){
    	$query = $this->client_questions();    
    	if(request()->has('state')){    		
    		$query->has('responses', '<', '1');
    	}
    	return $query;
    }
    
    public function setPasswordAttribute($value){    	
    	if(!empty($value)){
    		$this->attributes['password'] = bcrypt($value);    	
    	}
    }
}
