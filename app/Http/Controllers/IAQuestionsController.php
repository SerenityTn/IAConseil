<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Response;

class IAQuestionsController extends QuestionsController{
 
    public function index(){
    	$ia_questions = Question::where('is_ia', 1)->latest()->paginate(5);
    	return view('advisor.questions.ia.index', compact('ia_questions'));
    }
    
    public function show($id){
    	$ia_question = Question::find($id);
    	return view('advisor.questions.ia.show', compact('ia_question'));
    }

    public function create(){
		$responses = Response::lists('text','id');
		return view('advisor.questions.ia.create', compact('responses'));		
    }

    public function store(Request $request){    	
		$iaquestion = new Question([
			'content' => $request->input('content'),
			'is_ia' => true
		]);		
		auth()->user()->questions()->save($iaquestion);
		$iaresponse = new Response([
			'text' => $request->input('text')
		]);		
		$iaresponse->save();		
		$iaquestion->responses()->attach($iaresponse);
		return back()->with('status', "Question ajouté à la base de données !");
    }
  

    public function edit($id){
    	$ia_question = Question::find($id);
        return view('advisor.questions.ia.edit', compact('ia_question'));
    }
   
    public function update(Request $request, $id){
        $ia_question = Question::find($id);
        $response = Response::find($ia_question->response()->id);        
        $ia_question->content = $request->input('content');        
        $ia_question->save();
        $response->text = $request->input('text');
        $response->save();
        return back()->with('status', 'Question IA modifié');
    }
}
