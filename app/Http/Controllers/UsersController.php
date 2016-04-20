<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;
use Request;

class UsersController extends Controller{	
	
	public function create(){
		
	}
	
	public function store(Request $request){		
		User::create(Request::all());		
		return Request::all();
	}
	
	public function edit($id){
		$user = User::find($id);
		return view('user.edit', compact('user'));
	}
	
	public function update($id){
		$rules = array(
				'nom'       => 'required',
				'email'      => 'required|email',				
		);		
		$validator = validator()->make(Input::all(), $rules);
		if ($validator->fails()) {
			return redirect()->to(route(['user.edit', $id]))
			->withErrors($validator)
			->withInput(input());
		}else{
			$user = User::find($id);
			$user->fill(Input::all());
			$user->save();
			return redirect()->to(route('admin.manage.users'));
		}		
	}
	
	public function delete($id){
		$user = User::find($id);
		$user->delete();
		
		return redirect()->to(route('admin.manage.users'));		
	}
}
