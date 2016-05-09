<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\QuestionsController;

class ClientQuestionsController extends Controller {
	
	public function index() {
		$questions = auth()->user()->client_questions()->latest()->paginate(5);
		$view = request()->ajax() ? "client.questions.list" : "client.questions.index";
		return view($view, compact('questions'));		
	}
	
	public function filter(Request $request){	
		$questions = auth()->user()->filter_questions($request)->paginate(5);
		return view('client.questions.list', compact('questions'));		
	}
	
	public function show($question) {		
		$question->notif = 0;
		$question->save();
		return view('client.questions.show', compact('question'));
	}
	
	public function create() {		
		return view('client.questions.create');
	}
	
	public function store(Request $request) {		
		$question = $this->make_question($request);		
		$sqs = $this->get_similar_questions($question);		
		return view('client.questions.similar_questions', compact('sqs'), compact('question'));
	}
	
	public function attach_response($question){		
		$response = Question::find(request()->input('response_id'));		
		$question->responses()->attach($response, ['score' => request()->input('score')]);
		return 'success';
	}
	
	public function detach_response($question, $response){		
		$question->responses()->detach($response->id);
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
	
	public function save_feedback($question){		
		$note = request()->input('note');
		$question->feedback = $note;
		$question->save();
		return $question->feedback;
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
	
	public function destroy($question){				
		$question->deleted = true;
		$question->save();
	}
}
