<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Support\Facades\Input;

class MessagesController extends Controller{
	
	public function index(){
		$messages = Message::paginate(10);		
		return view('admin.messages.index', compact('messages'));		
	}	
	
	public function show($id){
		$message = Message::find($id);
		return view('admin.messages.show', compact('message'));		
	}
	
	public function create(){
		return view ('public.contact');
	}
		
	public function store(){					
			$message = Message::create(Input::all());			
			$message->save();
			return back();
	}
	
	public function destroy($id){
		Message::find($id)->delete();		
	}
}
