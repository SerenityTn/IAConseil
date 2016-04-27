<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Response;

class IAQuestionsController extends Controller{
 
    public function index(){
    	$iaquestions = Question::where('is_ia', 1)->latest()->get();
    	return view('advisor.question.iaquestions', compact('iaquestions'));
    }

    public function create(){
		$responses = Response::lists('text','id');		
		return view('advisor.question.iaquestion_create', compact('responses'));		
    }

    public function store(Request $request){    	
		$iaquestion = new Question();
		$iaquestion->content = $request->input('content');		
		$iaquestion->is_ia = 1;		
		auth()->user()->questions()->save($iaquestion);
		$iaresponse = new Response();
		$iaresponse->text = $request->input('text');				
		$iaresponse->save();		
		$iaquestion->responses()->attach($iaresponse);
		return redirect('/advisor/iaquestions');
    }
  
    public function show($id){
        //
    }


    public function edit($id){
        //
    }
   
    public function update(Request $request, $id){
        //
    }

	public function destroy($id) {
		$question = Question::find($id);
		$question->delete();
		return back()->with('message','Operation Successful !');		
	}
}
