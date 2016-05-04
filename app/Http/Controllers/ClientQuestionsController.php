<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\QuestionsController;

class ClientQuestionsController extends QuestionsController {
	
	public function index() {					
		$questions = auth()->user()->questions()->paginate(5);
		return view('client.questions.index', compact('questions'));		
	}
	
	public function create() {		
		return view('client.questions.create');
	}
	
	public function store(Request $request) {		
		$question = $this->make_question($request);		
		$sqs = $this->get_similar_questions($question);		
		return view('client.questions.similar_questions', compact('sqs'), compact('question'));
	}
	
	public function attach_response($question_id){
		$question = Question::find($question_id);
		$response = Question::find(request()->input('response_id'));		
		$question->responses()->attach($response, ['score' => request()->input('score')]);
		return 'success';
	}
	
	public function detach_response($question_id){
		$question = Question::find($question_id);
		$response_id = request()->input('response_id');	
		$question->responses()->detach($response_id);
		return 'success';
	}
	
	public function get_similar_questions($question){
		$similar_questions = array();
		$results = $question->getMatch($question->content);	
		foreach($results as $result){
			$question = Question::find($result->id);
			$similar_questions[] = ['question' => $question, 'score' => $result->score];
		}
		return $similar_questions;
	}
	
	public function make_question($request){
		$question = new Question([
				"content" => $request->content,
				"key_content" => $request->content,
				"is_ia" => 0
		]);
		auth()->user()->questions()->save($question);
		return $question;
	}								
	
	public function show($id) {
		$question = Question::find($id); 
		return view('client.question_show', compact('question'));
	}		
}
