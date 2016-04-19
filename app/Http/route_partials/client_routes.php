<?php
Route::group ( ['middleware'=> 'clientAuth', 'prefix' => 'client'], function () {
	Route::get ( '/', [
			'as' => 'client.index',
			'uses' => 'ClientsController@index'
	] );
	
	Route::get ( 'stats', [
			'as' => 'client.stats',
			'uses' => 'ClientsController@stats'
	] );
	
	Route::get ( 'questions', [
			'as' => 'client.questions',
			'uses' => 'ClientsController@questions'
	] );
	
	Route::get ( 'questions/create', [
			'as' => 'client.question.create',
			'uses' => 'ClientsController@create_question'
	] );
	
	Route::get ( 'questions/{id}/edit', [
			'as' => 'client.question.edit',
			'uses' => 'ClientsController@edit_question'
	] );
	
	Route::get ( 'questions/{id}', [
			'as' => 'client.question.show',
			'uses' => 'QuestionsController@show_question'
	] );
	
	Route::post( 'questions/response', [
			'as' => 'client.question.show_reponses',
			'uses' => 'ClientController@show_responses'
	]);
} );