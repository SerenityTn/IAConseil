<?php
Route::group ( ['middleware'=> 'clientAuth', 'prefix' => 'client'], function () {
	Route::get ( '/', [
			'as' => 'client.index', function(){
				return view('client.index');
			}
	] );
	
	Route::resource('questions', 'ClientQuestionsController');
	
	Route::get ( 'stats', ['as' => 'client.stats', function(){
				return view('client.statistiques');
			}
	] );	
		
	Route::post( 'questions/{question_id}/response', [
		'as' => 'client.question.response.assign',
		'uses' => 'ClientQuestionsController@attach_response'
	]);
	
	Route::delete( 'questions/{question_id}/response/{response_id}', [
			'as' => 'client.question.response.detach',
			'uses' => 'ClientQuestionsController@detach_response'
	]);
	
	Route::get( 'questions/{question_id}/response/{response_id}', [
			'as' => 'client.question.response.check',
			'uses' => 'ClientQuestionsController@check_response'
	]);
} );