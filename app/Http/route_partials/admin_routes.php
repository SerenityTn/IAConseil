<?php
Route::group(['middleware'=> 'adminAuth', 'prefix' => 'admin'], function(){
	
	Route::get('/',['as'=>'admin.index',function(){
		return view('admin.index');
	}]);
	
	Route::resource('users', 'UsersController');
		
	Route::resource('messages', 'MessagesController', ['only' => ['index', 'show', 'destroy']]);
});