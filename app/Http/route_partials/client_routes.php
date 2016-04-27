<?php
Route::group ( ['middleware'=> 'clientAuth', 'prefix' => 'client'], function () {
	Route::get ( '/', [
			'as' => 'client.index', function(){
				return view('client.index');
			}
	] );
	
	Route::get ( 'stats', ['as' => 'client.stats', function(){
				return view('client.statistiques');
			}
	] );

	
	Route::group(['prefix' => 'account'], function(){
		Route::get ( '/', ['as' => 'client.stats', function(){
			return view('client.statistiques');
		}
		] );
	});	
	
	Route::resource('questions', 'ClientQuestionsController');
		
	Route::post( 'questions/response', [
			'as' => 'client.question.show_reponses',
			'uses' => 'ClientController@show_responses'
	]);
} );