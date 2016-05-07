<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class CQuestionsController extends Controller {
	
	public function index() {		
		$questions = Question::clients_question()->latest()->paginate(5);
		$view = request()->ajax() ? "advisor.client.questions.list" : "advisor.client.questions.index";
		return view($view, compact('questions'));
	}
	
	public function filter(Request $request){		
		$questions = Question::filter_questions($request)->latest()->paginate(5);
		return view('advisor.client.questions.list', compact('questions'));		
	}
				
	public function show($question) {		
		return view('advisor.client.questions.show', compact('question'));
	}
	
	public function edit($question) {		
		return view('advisor.client.questions.edit', compact('question'));
	}
			
	public function update_index($question){
		$msg = "";		
		$question->is_ia = request()->input('is_ia');		
		$question->save();
		$msg = $question->is_ia ? "Cette question est ajouté à l'index" : "Cette question est supprimé de l'index";
		return back()->with('status', $msg);
	}

	public function destroy($question) {		
		$question->delete();		
	}
}
