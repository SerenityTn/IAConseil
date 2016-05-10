<?php
Route::group ( ['middleware'=> 'clientAuth', 'prefix' => 'client'], function () {
	Route::get ( '/', [
			'as' => 'client.index', function(){
				return view('client.index');
			}
	] );
	
	Route::resource('questions', 'ClientQuestionsController');
	
	Route::post('questions/filter', [
			'as' => 'client.questions.filter',
			'uses' => 'ClientQuestionsController@filter'
	]);
	
	//feedback
	Route::post('questions/{questions}/feedback', [
		'as' => 'client.questions.feedback',
		'uses' => 'ClientQuestionsController@save_feedback'
	]);
	
	//responses
	Route::post( 'questions/{questions}/responses', [
		'as' => 'client.questions.responses.assign',
		'uses' => 'ClientQuestionsController@attach_response'
	]);
	
	Route::delete( 'questions/{questions}/responses/{responses}', [
			'as' => 'client.questions.response.detach',
			'uses' => 'ClientQuestionsController@detach_response'
	]);
	
	Route::get( 'questions/{questions}/response/{responses}', [
			'as' => 'client.questions.responses.check',
			'uses' => 'ClientQuestionsController@check_response'
	]);
		
	Route::get ( 'dialog', ['as' => 'client.dialog', function(){
			return view('client.dialog.index');
		}
	]);
	
} );