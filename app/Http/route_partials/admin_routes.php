<?php
Route::group(['middleware'=> 'adminAuth', 'prefix' => 'admin'], function(){

	Route::get('/',['as'=>'admin.index',function(){
		$message = App\Message::latest()->first();
		$user = App\User::latest()->first();
		return view('admin.index', compact('message', 'user'));
	}]);

	Route::resource('users', 'UsersController');

	Route::post('users/filter', [
			'as' => 'admin.users.filter',
			'uses' => 'UsersController@filter'
	]);


	Route::resource('messages', 'MessagesController', ['only' => ['index', 'show', 'destroy']]);

	Route::post('/messages/respond', [
		'as'=>'admin.messages.respond',
		'uses' => 'MessagesController@respond'
	]);
});
