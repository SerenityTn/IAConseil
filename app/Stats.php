<?php

namespace App;

class Stats{
		
	public $questions_total;
	public $client_questions_total;
	public $ia_questions_total;
	public $questions_clients_indexed;
	public $questions_clients_answered;
	public $questions_clients_top;
	public $questions_score_avg = 9;
	public $questions_feedback_avg;
	
	public function __construct(){
		$this->questions_total = Question::all()->count();
		$this->ia_questions_total = $this->getIACount();
		$this->client_questions_total = $this->getClientCount();		
		$this->questions_clients_indexed = $this->getIAClientCount();
		$this->questions_answered =  Question::clients_questions()->has('responses')->count();
		//$this->questions_score_avg = Question::clients_questions()->with('responses')->avg('score');
		$this->questions_feedback_avg = Question::clients_questions()->where('feedback','>','0')->avg('feedback');
	}
	
	public function getStats(){
		return [$this->ia_questions_total, $this->client_questions_total, $this->questions_clients_indexed,
			$this->questions_score_avg, $this->questions_feedback_avg
		];
	}
	
	public function getIAStats(){
		return $this->getIACount();
	}
	
	public function getClientsStats(){
		return [$this->client_questions_total, $this->questions_answered];
	}
	
	//ia
	public function getIACount(){
		return Question::ia_questions()->whereHas('User', function($query){
			$query->where('role', '<', '3');
		})->count();		
	}	
	
	//client
	public function getClientCount(){
		return Question::clients_questions()->where('is_ia', '0')->count();
	}
	
	
	public function getIAClientCount(){
		return Question::clients_questions()->where('is_ia', '1')->count();
	}
}
