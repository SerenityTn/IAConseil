<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model{	
	protected $fillable = ['content','key_content','is_ia'];
		
	public function setKeycontentAttribute($content){		
		$stopwords = file(storage_path()."/app/data/stopwords.txt", FILE_IGNORE_NEW_LINES);
		$this->attributes['key_content'] = preg_replace('/\b('.implode('|',$stopwords).')\b/i ','',$content);
	}

	public function responses(){
		return $this->belongsToMany("App\Response")->withPivot('score')->orderBy('score', 'desc');
	}
	
	public function firstResponse(){
		return $this->responses()->first();
	}
	
	public function user(){
		return $this->belongsTo('App\User');		
	}
}
