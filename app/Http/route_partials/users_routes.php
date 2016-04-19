<?php
Route::group(['prefix' => 'user', 'middleware' => 'adminAuth'], function(){
	Route::put('{id}',[
		'as' => 'user.update',
		'uses' => 'UsersController@update'
	]);
	
	Route::delete('{id}',[
			'as' => 'user.delete',
			'uses' => 'UsersController@delete'
	]);	
});