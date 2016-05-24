<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Mail;
use Illuminate\Support\Facades\Input;

class MessagesController extends Controller{

	public function index(){
		$messages = Message::paginate(10);
		return view('admin.messages.index', compact('messages'));
	}

	public function show($id){
		$message = Message::find($id);
		$user = User::where('email', $message->email);
		return view('admin.messages.show', compact('message', 'user'));
	}

	public function respond(){
		Mail::send('admin.messages.test', array('nom'=>Input::get('nom')), function($message){
			$message->to('serenity1994@hotmail.fr', Input::get('nom'))->subject('Welcome to the Laravel 5.2 Auth App!');
 		});
		return back()->with('status', 'Message envoyé avec succès');
	}

	public function create(){
		return view ('public.contact');
	}

	public function store(){
			$message = Message::create(Input::all());
			$message->save();
			return back()->with('status', 'Votre message a été envoyé avec succès !');
	}

	public function destroy($id){
		Message::find($id)->delete();
	}
}
