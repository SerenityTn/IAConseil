<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
	public function theme(){
		return $this->belongsTo("App\Theme");
	}
}
