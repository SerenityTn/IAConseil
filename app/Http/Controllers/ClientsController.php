<?php

namespace App\Http\Controllers;


use App\User;
use Auth;

class ClientsController extends Controller{
	public function index(){		
		return view('client.index');
	}
	
	public function questions(){
		$questions = Auth::user()->questions;
		return view('client.questions', compact('questions'));
	}
	
	public function show_question(){
	
	}
		
	
	public function create_question(){		
		return view('client.question_create');
	}

	
	public function stats(){
		return view('client.statistiques');
	}
	
}

