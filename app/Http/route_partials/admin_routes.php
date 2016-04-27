<?php
Route::group(['middleware'=> 'adminAuth', 'prefix' => 'admin'], function(){
	
	Route::get('/',['as'=>'admin.index',function(){
		return view('admin.index');
	}]);
	
	Route::group(['prefix' => 'manage'], function(){
		
		Route::resource('users', 'UsersController');			
		Route::resource('messages', 'MessagesController',
				['only' => ['index', 'show', 'destroy']]);
	
	});
});