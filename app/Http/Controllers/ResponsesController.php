<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Response;

class ResponsesController extends Controller{
    public function create($question){    	    	
    	return view('advisor.clients.questions.responses.create', compact('question'));    	    
    }

    public function store(Request $request, $question){    	    	
		$response = new Response([
			'text' => $request->input('text')
		]);
		$question->responses()->save($response);
		$question->notif = 1;
		$question->save();
		return back()->with('status', 'Réponse affecté !');
    }

    public function edit($question, $response){       				 
    	return view('advisor.clients.questions.responses.edit',compact('question'), compact('response'));
    }

    public function destroy($question, $response){    	
    	$question->responses()->detach($response->id);
    }
}
	