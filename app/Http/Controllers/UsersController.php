<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;
use Request;

class UsersController extends Controller{
	
	public function index(){
		$users = User::all();
		return view('admin.manage_users', compact('users'));
	}
	
	public function show($id){
		return view('admin.user_show');
	}
	
	public function create(){
		return view ('admin.user_create');
	}
	
	public function store(Request $request){		
		$user = User::create(Request::all());
		$user->save();
		return redirect()->to(route('admin.manage.users.index'));
	}
	
	public function edit($id){
		$user = User::find($id);
		return view('admin.user_edit', compact('user'));
	}
	
	public function update($id){
		$rules = array(
				'nom'       => 'required',
				'email'      => 'required|email',				
		);				
		$validator = validator()->make(Input::all(), $rules);		
		if ($validator->fails()) {			
			return back()
			->withErrors($validator)
			->withInput(request()->input());
		}else{			
			$user = User::find($id);			
			$user->fill(Input::all());			
			$user->save();
			return redirect()->to(route('admin.manage.users.index'));
		}		
	}
	
	public function delete($id){
		$user = User::find($id);
		$user->delete();
		
		return redirect()->to(route('admin.manage.users.index'));		
	}
}
