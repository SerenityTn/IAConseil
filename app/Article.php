<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model{
	
	protected $fillable = ['title', 'content'];
	public function theme(){
		return $this->belongsTo("App\Theme");
	}	
	

}
