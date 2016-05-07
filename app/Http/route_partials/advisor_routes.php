<?php

Route::group ( ['middleware'=> 'advisorAuth', 'prefix' => "advisor"], function () {
	Route::get ( '/', ['as' => 'advisor.index', function(){
				return view('advisor.index');
			}
	] );
	
	Route::group(['prefix' => 'client'], function(){		
		Route::resource('questions', 'CQuestionsController');
		
		Route::post('questions/filter', [
				'as' => 'advisor.client.questions.filter',
				'uses' => 'CQuestionsController@filter'
		]);
		
		Route::post('questions/{questions}/update_index', [
			'as' => 'advisor.client.questions.update_index',
			'uses' => 'CQuestionsController@update_index' 
		]);		
		
		Route::resource('questions.responses', 'ResponsesController');
	});
		
	Route::group(['prefix' => 'ia'], function(){
		Route::resource('questions', 'IAQuestionsController');
	});
	
	Route::resource('articles', 'ArticlesController');
} );