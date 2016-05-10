<?php
Route::group(['middleware'=> 'adminAuth', 'prefix' => 'admin'], function(){
	
	Route::get('/',['as'=>'admin.index',function(){
		$message = App\Message::latest()->first();
		$user = App\User::latest()->first();
		return view('admin.index', compact('message', 'user'));
	}]);
	
	Route::resource('users', 'UsersController');
		
	Route::resource('messages', 'MessagesController', ['only' => ['index', 'show', 'destroy']]);
});