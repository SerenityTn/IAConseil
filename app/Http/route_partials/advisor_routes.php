<?php

Route::group ( ['middleware'=> 'advisorAuth', 'prefix' => "advisor"], function () {
	Route::get ( '/', ['as' => 'advisor.index', function(){
				return view('advisor.index');
			}
	] );
	
	Route::resource('client_questions', 'ClientQuestionsController');
	Route::post('client_questions', 'ClientQuestionsController@index');
			
	
	Route::resource('iaquestions', 'IAQuestionsController');	
	Route::resource('article', 'ArticlesController');
} );