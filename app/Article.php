<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model{
	public function theme(){
		return $this->belongsTo("App\Theme");
	}	
	

}
