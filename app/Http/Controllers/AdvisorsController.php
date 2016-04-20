<?php

namespace App\Http\Controllers;


use App\Http\Requests\Request;
use App\Question;
use App\Response;

class AdvisorsController extends Controller{
	
	public function index(){
		return view('advisor.index');
	}
	
	public function questions_index($type){
		if($type == "IA"){
			$iaquestions = Question::where('is_ia', 1)->get();
			return view('advisor.question.iaquestions', compact('iaquestions'));
		}else{			
			$questions = Question::where('is_ia', 0)->get();
			return view('advisor.question.questions', compact('questions'));
		}
	}
	
	public function create_question() {		
		$responses = Response::lists('text','id');		
		return view('advisor.questions.question_create', compact('responses'));		
	}
	
	public function show_question($id) {
		
	}
			
	public function edit_question($id) {
		
	}
		
	public function addIAQuestion(Request $request){
		$iaquestion = new Question();
		$iaquestion->content = $request->question;
		$iaquestion->response = $request->response;
		$iaquestion->is_ia = 0;
		$iaquestion->save();		
		return redirect('/advisor');
	}
}
