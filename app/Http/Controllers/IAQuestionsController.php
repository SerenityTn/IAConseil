<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Response;

class IAQuestionsController extends QuestionsController{
 
    public function index(){
    	$ia_questions = Question::where('is_ia', 1)->latest()->paginate(5);
    	return view('advisor.ia.questions.index', compact('ia_questions'));
    }
    
    public function show($ia_question){    	
    	return view('advisor.ia.questions.show', compact('ia_question'));
    }

    public function create(){
		$responses = Response::lists('text','id');
		return view('advisor.ia.questions.create', compact('responses'));		
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
  

    public function edit($ia_question){    	
        return view('advisor.ia.questions.edit', compact('ia_question'));
    }
   
    public function update(Request $request, $ia_question){        
        $response = Response::find($ia_question->response()->id);        
        $ia_question->content = $request->input('content');        
        $ia_question->save();
        $response->text = $request->input('text');
        $response->save();
        return back()->with('status', 'Question IA modifié');
    }
    
    public function destroy($question){
    	$question->delete();
    }
}
