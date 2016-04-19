<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;

class AdminsController extends Controller{	
	public function index(){
		return view('admin.index');		
	}
	
	public function manage_users(){
		$users = User::all();		
		return view('admin.manage_users', compact('users'));
	}	
	
	public function manage_messages(){
		//$messages = Message::all();
		return view('admin.manage_messages'/*, compact('messages')*/);
	}
}
