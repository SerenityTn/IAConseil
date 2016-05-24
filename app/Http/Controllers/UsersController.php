<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;


class UsersController extends Controller{

	public function index(){
		$users = User::paginate(10);
		$view = request()->ajax() ? "admin.users.list" : "admin.users.index";
		return view($view, compact('users'));
	}

	public function show($id){
		$user = User::find($id);
		return view('admin.users.show', compact('user'));
	}

	public function create(){
		if(Request::ajax()){
			return view ('admin.users.create');
		}
	}

	public function filter(Request $request){
		$users = User::filter_users($request)->paginate(5);
		return view('admin.users.list', compact('users'));
	}

	public function store(Request $request){
		$user = User::create(Request::all());
		$user->save();
		return redirect()->to(route('admin.users.index'));
	}

	public function edit($id){
		$user = User::find($id);
		return view('admin.users.edit', compact('user'));
	}

	public function update($id){
		$user = User::find($id);
		$user->fill(Input::all());
		$user->save();
		return redirect()->to(route('admin.users.index'));
	}

	public function destroy($id){
		$user = User::find($id);
		$user->delete();
	}
}
