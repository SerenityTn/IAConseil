<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Support\Facades\Input;

class MessagesController extends Controller{
	
	public function index(){
		$messages = Message::all();		
		return view('admin.manage_messages', compact('messages'));		
	}	
	
	public function show($id){
		$message = Message::find($id);
		return view('admin.message_show', compact('message'));		
	}
	
	public function create(){
		return view ( 'public.contact' );
	}
		
	public function store(){					
			$message = Message::create(Input::all());			
			$message->save();
			return back();
	}
	
	public function destroy($id){
		Message::find($id)->delete();
		return back();
	}
}
