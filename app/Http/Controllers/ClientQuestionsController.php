<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClientQuestionsController extends Controller {
	
	public function index() {
		if(auth()->user()->role == 2){
			if(Input::has('for')){
				
			}
			$query = Question::where('is_ia', 0);		
			$questions = $query->get();
			return view('advisor.question.client_questions', compact('questions'));
		}else{			
			$questions = auth()->user()->questions;
			return view('client.questions', compact('questions'));
		}
	}
	
	public function create() {		
		return view('client.question_create');
	}
	
	public function store(Request $request) {				
		$question = $this->make_question($request);
		$question_content = $question->content;
		$sq = $question->getMatch($question_content);
		$this->store_responses($sq, $question);
		return view('client.responses_show', compact('sq', 'question_content'));
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
	
	public function store_responses($similar_questions, $question){
		foreach($similar_questions as $sq){
			$q = Question::find($sq->id);
			$rep = $q->firstResponse();
			$question->responses()->attach($rep->id, ["score" => $sq->score]);
		}
	}
	
	public function show($id) {
		$client_question = Question::find($id); 
		return view('admin.client_question_show', $client_question);
	}
	public function edit($id) {
		$client_question = Question::find($id);
		return view('admin.client_question_edit', $client_question);
	}
	public function update(Request $request, $id) {
		//
	}
	
	public function destroy($id) {
		$question = Question::find($id);
		$question->delete();
		return back()->with('message','Operation Successful !');		
	}
	
}
