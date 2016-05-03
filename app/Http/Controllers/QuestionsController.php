<?php

namespace App\Http\Controllers;

use App\Question;

class QuestionsController extends Controller{
	public function destroy($id) {
		$question = Question::find($id);
		$question->delete();			
	}
}
