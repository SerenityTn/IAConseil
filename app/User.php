<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','email', 'password','ville', 'societe','tel', 'role', 'site_web'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function questions(){
    	return $this->hasMany('App\Question')->latest();
    }
        
    public function setPasswordAttribute($value){
    	
    	if(!empty($value)){
    		$this->attributes['password'] = bcrypt($value);    	
    	}
    }
}
