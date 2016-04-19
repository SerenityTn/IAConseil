<?php
Route::group (['middleware'=> 'auth', 'prefix' => 'question'], function () {
	Route::post('create',[
		'as' => 'question.store',
		'uses' => 'QuestionsController@store'
	]);
	
	Route::put('{id}',[
		'as' => 'question.update',
		'uses' => 'QuestionsController@update'
	]);
	
	Route::delete('{id}',[
		'as' => 'question.delete',
		'uses' => 'QuestionsController@delete'
	]);
});