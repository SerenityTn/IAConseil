<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Question;

class CQuestionsController extends Controller {
	
	public function index() {
		$query = Question::where ( 'is_ia', 0 );
		$questions = $query->paginate(5);
		return view ( 'advisor.questions.client.index', compact ( 'questions' ) );
	}
				
	public function show($id) {
		$question = Question::find($id);
		return view('advisor.questions.client.show', compact('question'));
	}
	
	public function edit($id) {		
		$question = Question::find($id);
		return view('advisor.questions.client.edit', compact('question'));
	}
	
	public function add_index_question($id){		
		$question = Question::find($id);
		$question->is_ia = 1;
		$question->save();		
		return back()->with('status', "Cette question est ajouté à l'index");
	}
	
	public function remove_index_question($id, $b){
		$question = Question::find($id);
		$question->is_ia = 0;
		$question->save();
		return back()->with('status', "Cette question est supprimé de l'index");
	}
	
	public function store($id) {
		
	}
		
	public function destroy($id) {
		$question = Question::findOrfail($id);
		$question->delete();
		return back()->with('status','Question supprimé');
	}
}
