<?php

namespace App\Http\Controllers;


use App\Question;

class ClientController extends Controller{
	public function index(){
		$questions = Question::all();
		return view('client.index', compact("questions"));
	}
	
	public function ask() {
		return false;
	}
}

