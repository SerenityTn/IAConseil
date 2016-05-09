<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Response;

class ResponsesController extends Controller{
    public function create($question){    	    	
    	return view('advisor.client.questions.responses.create', compact('question'));    	    
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

    public function edit($response){
    }

    public function update(Request $request, $id){
    }

    public function destroy($question, $response){    	
    	$question->responses()->detach($response->id);
    }
}
	