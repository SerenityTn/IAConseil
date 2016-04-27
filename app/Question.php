<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
	
	public function getMatch($q){
		$q = DB::connection()->getPdo()->quote($q);
		$responses = DB::table('questions')->where('is_ia', 1) //question ia
		->whereRaw("MATCH(content)
		AGAINST (".$q." IN NATURAL LANGUAGE MODE)")
			->whereRaw("MATCH (content)
			AGAINST (".$q." IN NATURAL LANGUAGE MODE)")
				->orderBy('score', 'desc')->take(3);
	
				return $responses->get(['id', \DB::raw("MATCH (content) AGAINST (".$q.") AS score")]);
	}
	
	
	public function user(){
		return $this->belongsTo('App\User');		
	}
}
