<?php
Route::group ( ['middleware'=> 'advisorAuth', 'prefix' => "advisor"], function () {

	Route::get ( '/', [
			'as' => 'advisor.index',
			'uses' => 'AdvisorsController@index'
	] );

	Route::get ( 'questions/{type}', [
			'as' => 'advisor.questions',
			'uses' => 'AdvisorsController@questions_index'
	] )->where(['type' => 'IA|client']);
	
	
	Route::get ( 'questions/{id}', [
			'as' => 'advisor.question.show',
			'uses' => 'AdvisorsController@show_question'
	] )->where(['id' => '[0-9]+']);
	
	Route::get ( 'questions/create', [
			'as' => 'advisor.question.create',
			'uses' => 'AdvisorsController@create_question'
	] );
	
	Route::get ( 'questions/{id}/edit', [
			'as' => 'advisor.question.edit',
			'uses' => 'AdvisorsController@edit_question'
	] );
} );