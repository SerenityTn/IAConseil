<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model{
	public function questions(){
		return $this->belongsToMany("App\Question");
	}
}
