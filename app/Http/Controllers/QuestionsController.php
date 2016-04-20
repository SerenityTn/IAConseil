<?php

namespace App\Http\Controllers;

use App\Question;
use App\Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller{
	public function store(Request $request){
		$user = User::find(auth()->user()->id);
		$isAdvisor = $user->role == 2;
		$question = new Question([
						"content" => $request->content,
						"key_content" => $request->content,	
				 		"is_ia" => $isAdvisor							
					]);			
		$user->questions()->save($question);
		if($isAdvisor){			
			store_response_advisor($question, $request);			
			redirect()->route('advisor.question.create');
		}else{									
			$q = $question->content;
			$sq = $this->getResponses($question->content);
			$this->store_responses_client($sq, $question);
			return view('client.responses_show', compact('sq', 'q'));
		}
	}
	
	public function getResponses($q){
		$q = DB::connection()->getPdo()->quote($q);
		$responses = DB::table('questions')->where('is_ia', 1) //question ia
										 ->whereRaw("MATCH(content)
										 AGAINST (".$q." IN NATURAL LANGUAGE MODE)")
											 ->whereRaw("MATCH (content)
													AGAINST (".$q." IN NATURAL LANGUAGE MODE)"
											 		)->orderBy('score', 'desc')->take(3);
		return $responses->get(
				['id', \DB::raw("MATCH (content) AGAINST (".$q.") AS score")		
		]);
	}
	
	
	public function store_response_advisor($question, $request){				
		if($request->response_id == ""){
			$response = new Response();
			$response->text = $request->text;
		}else{
			$response = Response::find($request->response_id);
		}
		
	}
	
	public function store_responses_client($similar_questions, $question){
		foreach($similar_questions as $sq){
			$q = Question::find($sq->id);
			$rep = $q->firstResponse();			
			$question->responses()->attach($rep->id, ["score" => $sq->score]);
		}
	}
	
	public function update($id){
		
	}
	
	public function delete($id) {
		$question = Question::find($id);
		$question->delete();
		return Redirect::back()->with('message','Operation Successful !');		
	}
}
